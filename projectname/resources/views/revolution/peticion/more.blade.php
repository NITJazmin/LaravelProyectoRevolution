<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="more-{{$sol->ID_peticion}}">
	
	
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">x</span>
				</button>
				<h4 class="modal-title">{{$sol->Nombre}} </h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<label> Archivo cargado</label>
							<p style="border: 3em;">aqui va el cv adjunto</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group" style="text-align: center;">
							@if($sol->Nombre=="ESE")
								<label>Analista</label>
								@if($sol->ID_analista==0)
									<p>sin Asignar</p>
								@else
									<P>{{$sol->ID_analista}} </P>								 
								@endif
							@elseif($sol->Nombre=="Vacante")
								<label>Reclutadodor</label>
								@if($sol->ID_analista==0)
									<p>sin Asignar</p>
								@else
									<P>{{$sol->ID_reclutador}} </P>								 
								@endif
							@endif
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Confirmar</button>
			</div>
		</div>
	</div>
	
</div>