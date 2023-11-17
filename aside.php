<aside class="h-full w-1/6 flex flex-col gap-10">

	<div class=" p-5 rounded-md bg-white">
		<h3 class="pb-2 text-xl">Lojas</h3>
		<ul>
			<li>
				<label>
					<input type="checkbox" name="tag_marker[]" value="13253" id="tag_marker_13253" />
					Americanas
				</label>
			</li>
			<li>
				<label>
					<input type="checkbox" name="store[]" value="856" id="store_856" />
					Carrefoour
				</label>
			</li>
		</ul>
	</div>

	<div class="p-5 rounded-md bg-white">
		<h3 class="pb-2 text-xl">Pagamento</h3>
		<ul>
			<li>
				<label>
					<input type="radio" name="pay" value="forward" id="pay_forward" />
					Á prazo
				</label>
			</li>
			<li>
				<label>
					<input type="radio" name="pay" value="sighting" id="pay_sighting" />
					Á vista
				</label>
			</li>
		</ul>
	</div>

	<div class="p-5 rounded-md bg-white">
		<h3 class="text-xl pb-2">Palavra chave</h3>
		<ul>
			<li>
				<label>
					<input type="text" name="term[]" class="w-full p-2 rounded-md border-2 border-gray-300 " placeholder="pesquisar" />
				</label>
			</li>
		</ul>
		<button class="px-2 py-1 my-1 rounded-md bg-gray-300">Filtrar</button>
	</div>

</aside>