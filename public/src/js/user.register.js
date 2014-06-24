$(function(){
    var dfd = $.Deferred(),
        keygenBtn = $('#keygenBtn'),
        copyBtn = $('#copyBtn'),
        keyword = '',
        bits = 1024,
        publicKey = $('#publicKey'),
        privateKey = $('#privateKey');


    keygenBtn.on('click', function(){
        LOADER();

        keyword = $('#keyword').val();

        generateKeys().done(function(){
            LOADER();
            copyBtn.removeAttr('disabled');
        });
    });

    var generateKeys = function () {
        console.log('Keyword', keyword);
        $.when(cryptico.generateRSAKey(keyword, bits)).then(function(privKey){
            console.log('RSA key', JSON.stringify(privKey));
            privateKey.val(JSON.stringify(privKey));
            $.when(cryptico.publicKeyString(privKey)).then(function(pubKey){
                console.log('Pub key', pubKey);
                publicKey.val(pubKey);
                return dfd.resolve();
            });
        });
        return dfd.promise();
    }
});