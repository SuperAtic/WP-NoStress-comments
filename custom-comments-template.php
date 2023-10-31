<script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof window.nostr !== 'undefined') {
        // nos2x extension is detected
        console.log('nos2x extension detected');
        // You can enable or show relevant UI elements here
    } else {
        // nos2x extension is not detected
        console.log('nos2x extension not detected');
        // You can show a message to the user or hide certain UI elements
    }
});
</script>

<div id="wp-nostress-comments-form">
    <h3>Deja un comentario con <a href="https://nostr.how" target="_blank">NOSTR</a></h3>
    <form id="nsec-key-form">
        <label for="existing-key"><small><code>Ya tienes una llave NSEC? Pegala aqui <sub> 👇 CAUTIÓN ⚠️</sub></code></small></label><br/>
        <input type="text" id="existing-key" name="existing-key" placeholder="Pega tu NSEC aquí">
        <input class="brupton" type="submit" value="Connectar">
    </form>
    <p><small><code>ₐₗₜₑᵣₙₐₜᵢᵥₐₘₑₙₜₑ</code></small></p>
    <button onclick="window.open('https://hitony.com/nostrogen/', '_blank')" id="generate-new-key">Generar nueva llave <strong>NSEC</strong></button>
    <p><small><code>ₐₗₜₑᵣₙₐₜᵢᵥₐₘₑₙₜₑ</code></small></p>
    <button  id="connect-nos2x">Conectar con Extensión</button>
    <p class="extensiones"><small><code>Por ejemplo <a href="https://getalby.com/" target="_blank"><strong>🐝Alby</strong></a> o <br/>
   <a href="https://github.com/fiatjaf/nos2x" target="_blank"><strong>🔑Nost2x</strong></a> 
   en <a href="https://chrome.google.com/webstore/detail/nos2x/kpgefcfmnafjgpblomihpgmejjdanjjp" target="_blank">Chrom</a> 
   o <a href="https://diegogurpegui.com/nos2x-fox/" target="_blank">FireFox</a></code></small>.</p>

</div>

<script>
document.getElementById('connect-nos2x').addEventListener('click', function() {
    if (typeof window.nostr !== 'undefined') {
        window.nostr.getPublicKey().then(function(pubKey) {
            console.log('Public Key:', pubKey);
            // You can now use this public key for further actions
        }).catch(function(error) {
            console.error('Error retrieving public key:', error);
        });
    } else {
        alert('Please install the nos2x extension to continue.');
    }
});
</script>

<script>
function signEvent(event) {
    if (typeof window.nostr !== 'undefined') {
        window.nostr.signEvent(event).then(function(signedEvent) {
            console.log('Signed Event:', signedEvent);
            // You can now use this signed event for further actions
        }).catch(function(error) {
            console.error('Error signing event:', error);
        });
    } else {
        alert('Please install the nos2x extension to continue.');
    }
}
</script>
