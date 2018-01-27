<script src="./fuckadblock.js"></script>
<script>
    function adBlockDetected() {
        alert('Please Close Adblock');
    }

    function adBlockNotDetected() {

    }

    if (typeof fuckAdBlock === 'undefined') {
        adBlockDetected();
    } else {
        fuckAdBlock.setOption({debug: true});
        fuckAdBlock.onDetected(adBlockDetected).onNotDetected(adBlockNotDetected);
    }
</script>