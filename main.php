<section class="w-5/6 h-full flex flex-col gap-5">
	<nav class="flex items-center px-2 py-2 rounded-md bg-gray-100">
		<ul class="flex gap-10 text-sm text-gray-900 ">
			<li >
				<a href="/produtos">
					<i class="fas fa-box-open"></i>
					<span>Produtos</span>
				</a>
			</li>
			<li >
				<a href="/atualizacoes">
					<i class="fas fa-sync"></i>
					<span>Atualização</span>
				</a>
			</li>
			<li >
				<a href="/edicao">
					<i class="fas fa-edit"></i>
					<span>Edição</span>
				</a>
			</li>
			<li >
				<a href="/edicao">
				<i class="fas fa-trophy"></i>
					<span>Competitividade</span>
				</a>
			</li>
			<li>
				<a href="/edicao">
					<i class="fas fa-tags"></i>
					<span>Marcas</span>
				</a>
			</li>
			<li >
				<a href="/edicao">
				<i class="fas fa-store"></i>
					<span>Lojas</span>
				</a>
			</li>
		</ul>
	</nav>

	<div class="px-2 py-2 text-sm text-gray-700 rounded-md bg-gray-100">
		<ul class="flex justify-between items-center gap-2">
			<li >
				<span>Mostrando:</span>
				<i class="fas fa-tag text-gray-900"></i>
				<strong>2048</strong>
				<span>ofertas</span>
			</li>
			<li >
				<i class="fas fa-box-open text-gray-900"></i>
				<strong>402</strong> produtos
			</li>
			<li >
				<i class="fas fa-th text-gray-900"></i>
				<strong>13</strong> marcas
			</li>
			<li >
				<i class="fas fa-store text-gray-900"></i>
				<strong>12</strong> lojas
			</li>
			<li class="flex items-center">
				<span class="px-3 py-1 text-blue-600 rounded-md bg-gray-200 ">
					Categoria de Produtos: Alimentos
				</span>
				<i class="fas fa-info-circle pl-2 text-blue-600 "></i>
			</li>
		</ul>
	</div>

	<div class="flex justify-between items-center px-2 py-2 rounded-md bg-gray-100">
		<div class="flex gap-2 items-center">
			<h2 class="font-bold text-sm">Filtros Selecionados:</h2>
			<!-- <p class="text-sm">Produtos Disponíveis</p>rever -->
		</div>

		<ul class="flex gap-4 items-center">
			<li>
				<button class="flex items-center gap-2 px-3 py-1 text-sm text-blue-600 rounded-md bg-gray-200">
					<i class="fas fa-trash-alt"></i>
					<span>Limpar</span>
				</button>
			</li>
			<li>
				<button class="flex items-center gap-2 px-3 py-1 text-sm text-blue-600 rounded-md bg-gray-200">
					<i class="fas fa-filter"></i>
					<span>Filtros Salvos</span>
				</button>
			</li>
			<li>
				<button class="flex items-center gap-2 px-3 py-1 text-sm text-blue-600 rounded-md bg-gray-200 ">
					<i class="fas fa-sort"></i>
					<span>Ordenar</span>
				</button>
			</li>
			<li>
				<button class="flex items-center gap-2 px-3 py-1 text-sm text-blue-600 rounded-md bg-gray-200 hover:bg-blue-50">
					<i class="fas fa-download"></i>
					<span>Exportar</span>
				</button>
			</li>
		</ul>
	</div>

	<table class="w-full rounded-md overflow-hidden">
		<thead>
			<tr class="py-4 text-xs text-gray-600 uppercase bg-gray-200">
				<th class="w-1/12 px-2 py-4  text-left text-xs uppercase">Marca</th>
				<th class="w-9/12 px-2  text-left text-xs uppercase">Produto</th>
				<th class="w-1/12 px-2  text-left text-xs uppercase">Lojas</th>
				<th class="w-1/12 px-2  text-left text-xs uppercase">Mais Barato</th>
				<th class="w-1/12 px-2 "></th>
			</tr>
		</thead>
		<tbody class="divide-y divide-gray-200 bg-white">
			<tr class="text-sm text-gray-700">
				<td class="px-2">Tang</td>
				<td class="px-2">
					<div class="flex justify-between">
						<span>Refresco em Pó Tang Uva 25g</span>
						<div>
							<i class="fas fa-store mr-2"></i>
							<i class="fas fa-star mr-2"></i>
						</div>
					</div>
				</td>
				<td class="px-2 ">
					<span>3 lojas</span>
				</td>
				<td class="px-4 py-3">
					<button class="px-3 py-1 text-xs text-white rounded-md bg-green-400">R$ 0,79</button> rever
				</td>
				<td class="px-4 text-sm text-gray-500">
					<i class="fas fa-cog"></i>
				</td>
			</tr>
			<tr class="text-sm text-gray-700">
				<td class="px-2 ">Tang</td>
				<td class="px-2">
					<div class="flex justify-between">
						<span>Refresco em Pó Tang Maracujá 25g </span>
						<div>
							<i class="fas fa-store mr-2"></i>
							<i class="fas fa-star mr-2"></i>
						</div>
					</div>
				</td>
				<td class="px-2 ">
					<span>5 lojas</span>
				</td>
				<td class="px-4 py-3">
					<button class="px-3 py-1 text-xs text-white rounded-md  bg-orange-400">R$ 0,79</button>
				</td>
				<td class="px-4 text-sm text-gray-500">
					<i class="fas fa-cog"></i>
				</td>
			</tr>
			<tr class="text-sm text-gray-700">
				<td class="px-2 ">Tang</td>
				<td class="px-2">
					<div class="flex justify-between">
						<span>Refresco em Pó Tang Goiaba 18g</span>
						<div>
							<i class="fas fa-store mr-2"></i>
							<i class="fas fa-star mr-2"></i>
						</div>
					</div>
				</td>
				<td class="px-2 ">
					<span>3 lojas</span>
				</td>
				<td class="px-4 py-3">
					<button class="px-3 py-1 text-xs text-white rounded-md bg-red-500">R$ 1,20</button>
				</td>
				<td class="px-4 text-sm text-gray-500">
					<i class="fas fa-cog"></i>
				</td>
			</tr>
		</tbody>
	</table>
</section>