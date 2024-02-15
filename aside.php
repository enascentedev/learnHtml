<form method="get" action="/">
	<aside class="w-full h-full flex flex-col gap-5">

		<div class="p-5 text-sm rounded-md bg-white">
			<select name="category">
				<option value="all">Todos os horários</option>
				<option value="1">Ar Condicionado</option>
				<option value="2">Geladeira</option>
				<option value="3">Fogão</option>
				<option value="4">teste</option>
			</select>
		</div>

		<div class="p-5 text-sm rounded-md bg-white">
			<h4 class="pb-2 text-xl">Lojas</h4>
			<ul>
				<li>
					<label>
						<input type="checkbox" name="store[]" value="13253" />
						Americanas
					</label>
				</li>
				<li>
					<label>
						<input type="checkbox" name="store[]" value="856" />
						Carrefoour
					</label>
				</li>
			</ul>
		</div>

		<div class="p-5 text-sm rounded-md bg-white">
			<h4 class="pb-2 text-xl">Pagamento</h4>
			<ul>
				<li>
					<label>
						<input type="radio" name="pay" value="forward" />
						Á prazo
					</label>
				</li>
				<li>
					<label>
						<input type="radio" name="pay" value="sighting" />
						Á vista
					</label>
				</li>
			</ul>
		</div>

		<div class="p-5 text-sm rounded-md bg-white">
			<h4 class="text-xl pb-2">Palavra chave</h4>
			<label>
				<input type="text" name="term[]" class="w-full p-2 rounded-md border-2 border-gray-300 " placeholder="pesquisar" />
			</label>
		</div>
		<button type="submit" class="px-2 py-1 my-1 rounded-md bg-white">Filtrar</button>
	</aside>
</form>
<!-- mais opções de radio e checkboxes -->