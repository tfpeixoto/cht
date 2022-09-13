<!-- Modal -->
<div class="modal fade" id="modalContato" tabindex="-1" role="dialog" aria-labelledby="EntreEmContato" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Solicite um orçamento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center">Encontrou a peça que precisava ou não encontrou!? Entre em contato conosco e saiba como podemos lhe ajudar.</p>

        <?php echo do_shortcode( '[contact-form-7 id="11" title="Solicite um orçamento"]' ); ?>
      </div>
    </div>
  </div>
</div>