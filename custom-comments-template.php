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
    <button id="use-browser-extension">Conectar con Extensión</button>
    <p class="extensiones"><small><code>Por ejemplo <a href="https://getalby.com/" target="_blank"><strong>🐝Alby</strong></a> o <br/>
   <a href="https://github.com/fiatjaf/nos2x" target="_blank"><strong>🔑Nost2x</strong></a> 
   en <a href="https://chrome.google.com/webstore/detail/nos2x/kpgefcfmnafjgpblomihpgmejjdanjjp" target="_blank">Chrom</a> 
   o <a href="https://diegogurpegui.com/nos2x-fox/" target="_blank">FireFox</a></code></small>.</p>

</div>

<script>
    document.getElementById('generate-new-key').addEventListener('click', function() {
        // Logic to generate a new NSEC key using the Nostr library.
        // This will require more specific details from the Nostr library's documentation.
    });

    document.getElementById('use-browser-extension').addEventListener('click', function() {
        // Logic to use an external browser extension like Alby or Nos2x.
        // This might require specific integration based on the extension's API or functionality.
    });
</script>
