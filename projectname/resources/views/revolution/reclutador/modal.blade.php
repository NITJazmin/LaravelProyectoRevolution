<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$recl->ID_reclutador}}">
	
	<form action="/revolution/reclutador/{{$recl->ID_reclutador}}" method="POST">

		<input name="_method" type="hidden" value="DELETE">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">x</span>
				</button>
				<h4 class="modal-title">Eliminar Analista</h4>
			</div>
			<div class="modal-body">
				<p> Confirme si desea Eliminar a {{ $recl->Nombre}} {{ $recl->Papp}} {{ $recl->Sapp}} </p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Confirmar</button>
			</div>
		</div>
	</div>
	
	</form>
	
</div>