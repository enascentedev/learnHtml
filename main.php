<main class="flex flex-1 justify-center items-center bg-gray-500 ">

	<aside class="h-full w-1/6 flex flex-col gap-10 pl-10 pr-5 py-5 bg-gray-400 ">
		<div class="w-full p-5 bg-white rounded-md">
			<h3 class="text-xl pb-2">Lojas</h3>
			<ul>
				<li>
					<label>
						<input type="checkbox" id="checkboxInput1" name="checkbox1" />
						Manlec
					</label>
				</li>
				<li>
					<label>
						<input type="checkbox" id="checkboxInput2" name="checkbox2" />
						Colombo
					</label>
				</li>
			</ul>
		</div>

		<div class="w-full p-5 bg-white rounded-md">
			<h3 class="text-xl pb-2">Marcas</h3>
			<ul>
				<li>
					<label>
						<input type="radio" id="radioInput1" name="radio" />
						Nike
					</label>
				</li>
				<li>
					<label>
						<input type="radio" id="radioInput2" name="radio" />
						Adidas
					</label>
				</li>
			</ul>
		</div>


		<div class="w-full p-5 bg-white rounded-md">
			<h3 class="text-xl pb-2">Palavra chave</h3>
			<ul>
				<li>
					<label>
						<input type="text" id="keyword" class="w-full rounded-md border-2 border-gray-300 p-2" placeholder="pesquisar" />
					</label>
				</li>
			</ul>
			<button class="px-2 py-1 my-1 rounded-md bg-gray-300">Filtrar</button>
		</div>
	</aside>


	<section class="w-5/6 bg-gray-400 h-full pr-10">
		<nav class="py-3 bg">
			<ul class="flex gap-20">
				<li class="flex items-center">
					<a href="#" class="text-gray-900 hover:text-blue-800">Produtos</a>
				</li>
				<li class="flex items-center">
					<a href="#" class="text-gray-900 hover:text-blue-800">Design</a>
				</li>
				<li class="flex items-center">
					<a href="#" class="text-gray-900 hover:text-blue-800">Edição</a>
				</li>
				<li class="flex items-center">
					<a href="#" class="text-gray-900 hover:text-blue-800">Edição</a>
				</li>
				<li class="flex items-center">
					<a href="#" class="text-gray-900 hover:text-blue-800">Edição</a>
				</li>
				<li class="flex items-center">
					<a href="#" class="text-gray-900 hover:text-blue-800">Edição</a>
				</li>
			</ul>
		</nav>
		<div class="py-5">
			<ul class="flex items-center justify-between">
				<li>Mostrando:</li>
				<li><strong>342086</strong> ofertas</li>
				<li><strong>952006</strong> produtos</li>
				<li><strong>611</strong> marcas</li>
				<li><strong>260</strong> lojas</li>

				<ul class="flex items-center ">
					<li>Categoria de Produtos:</li>
					<li>Automóveis e Veículos</li>
				</ul>
			</ul>
		</div>
		<div>
			<div class="flex items-center justify-between">
				<div class="flex">
					<h2>Filtros selcionados:</h2>
					<p>Produtos Disponíveis</p>
				</div>

				<ul class="flex gap-5 ">
					<li class="flex items-center">
						<a href="#">Produtos</a>
					</li>
					<li class="flex items-center">
						<a href="#">Design</a>
					</li>
					<li class="flex items-center">
						<a href="#">Edição</a>
					</li>
					<li class="flex items-center">
						<a href="#">Edição</a>
					</li>
					<li class="flex items-center">
						<a href="#">Edição</a>
					</li>
					<li class="flex items-center">
						<a href="#">Edição</a>
					</li>
				</ul>
			</div>
		</div>
		<table class="min-w-full mt-5 rounded-md overflow-hidden">
			<thead class="bg-gray-50 ">
				<tr>
					<th class="w-1/12 px-2 py-1 text-left text-xs uppercase">
						Marca
					</th>
					<th class="w-10/12 px-2 py-1 text-left text-xs uppercase">
						Produto
					</th>
					<th class="w-1/12 px-2 py-1 text-left text-xs uppercase">
						Lojas
					</th>
					<th class="w-1/12 px-2 py-1 text-left text-xs uppercase">
						Mais Barato
					</th>
					<th class="w-1/12 px-2 py-1"></th>
				</tr>
			</thead>
			<tbody class="bg-white divide-y divide-gray-200 rounded-md">

				<tr>
					<td class="px-2 py-4 text-sm text-gray-500">Pirelli</td>
					<td class="px-1 py-4 text-sm text-gray-500">
						Tire Pirelli Scorpion All Terrain Plus 275/55 R20 113T All
						Season All Terrain Plus 275/55 R20 113T
						<i class="fas fa-star pl-40"></i>
						<i class="fas fa-image"></i>
					</td>

					<td class="px-1 py-4 text-sm text-gray-500">2 lojas</td>
					<td class="px-1 py-4 text-sm text-gray-500">R$ 8,54</td>
					<td class="px-1 py-4 text-sm text-gray-500">
						<i class="fas fa-cog icone-produto px-5"></i>
					</td>
				</tr>
			</tbody>
		</table>
	</section>
</main>