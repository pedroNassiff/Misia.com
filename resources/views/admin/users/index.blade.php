

	<section class="height-basic">
	    <div class="container" style="margin-top: 180px; margin-bottom: 180px;">
	        <div class="row">
	            <div class="panel panel-default">
				@if (session()->has('flash_notification.message'))
				    <div class="alert alert-{{ session('flash_notification.level') }}">
				        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				        {!! session('flash_notification.message') !!}
				    </div>
				@endif
				<div class="panel-heading">
					<span class="black-font">Usuarios</span>
					<div class="pull-right">
						
					</div>
				</div>
					<div class="panel-body">
						<div id="tableWithDynamicRows_wrapper" class="dataTables_wrapper form-inline no-footer">
							<div class="table-responsive overflowFixed">
								<table id="tableWithDynamicRows" class="table table-hover demo-table-dynamic dataTable no-footer" role="grid" aria-describedby="tableWithDynamicRows_info">
									<thead>
										<tr role="row">
											<th class="col-md-3">Nombre</th>
											<th class="col-md-4">Correo</th>
											<th class="col-md-2">Acciones</th>
										</tr>
									</thead>
									<tbody>
									@foreach($users as $user)
									<tr role="row" class="odd">
										<td class="v-align-middle">
											<p>
												{{ $user->name }}
											</p>
										</td>
										<td class="v-align-middle">
											<p>
												{{ $user->email }}
											</p>
										</td>
										<td class="v-align-middle">
										<td class="v-align-middle">
											<a href="{{ route('users.show', $user->id) }}"><button class="btn btn-complete"><i class="fa fa-eye"></i></button></a> 

											<a href="{{ route('users.edit', $user->id) }}"><button class="btn btn-complete"><i class="fa fa-edit"></i></button></a> 
											
												<a href="{{ route('users.editpassword', $user->id) }}"><button class="btn btn-complete"><i class="fa fa-key"></i></button></a>
											
											
												<a href="{{ route('users.destroy', $user->id) }}" onclick="return confirm('Â¿Desea eliminar el usuario?')" onkeypress="return confirm('Â¿Desea eliminar el usuario?')">
													<button class="btn btn-complete">
														<i class="fa fa-remove"></i>
													</button>
												</a>
											

										</td>
									</tr>
									@endforeach	
									</tbody>
								</table>
								<div class="text-center">{!! $users->render() !!}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

