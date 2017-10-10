<section>
  <div id="corpo_crud_produto">
    <form>	
		<!-- <textarea name="descricao" cols="10" rows="10"></textarea> -->
		<fieldset>
			<legend> Informações sobre o produto </legend>
      <label>ID:
			<input type="text" name="id" disabled="true" readonly='true'></label>
			</label>
       <label>Nome:
         <input type="text" name="" required="true">
       </label>
             <label>Descricao:
         <input type="text" maxlength="400">
       </label>
      <label>fornecedor:
			 <input list="fornecedor" name="fornecedores">
          <datalist id="fornecedor">
            <option value="Ragazza">
            <option value="Amora.Z">
            <option value="Louis & Girl">
        </datalist>

			</label>
			<label>Tipo de Produto:
			 <input list="tipoproduto" name="tipoproduto">
          <datalist id="tipoproduto">
            <option value="Sapatilha">
            <option value="Bolsa">
            <option value="Acessorios">
        </datalist>
			</label>
			<label> Preço de custo: R$
        <input type="number" min="0.00" max="10000.00" step="0.01" />
      </label>
      <label> Preço de venda: R$
        <input type="number" min="0.00" max="10000.00" step="0.01" />
      </label>
      <label>Tamanho MIN:
       <input type="range" min="0" max="50" step="1">
      </label>
        <label>Tamanho MAX:
       <input type="range" min="0" max="50" step="1">
      </label>
      <label>Imagem:
      <input type="file" name="imagem" accept="image/*">
      </label>
      <label>
        Detalhes:
        <input type="text" maxlength="400">
      </label>
			<button type="submit" name="cadastrar">         
      cadastrar
      </button>
			<button type="submit" name="editar">         
      editar
      </button>
      			<button type="submit" name="excluir">         
      excluir
      </button>
			<button type="submit" name="atualizar">         
      atualizar
      </button>
		</fieldset>	
</form> 
  </div>

 <table style="width:100%">
  <thead>
   <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Descricao</th>
    <th>Fornecedor</th>
    <th>Preço de custo</th>
    <th>Preço de venda</th>
    <th>Tamanhos min</th>
    <th>Tamanhos max</th>
    <th>Detalhes</th>
     <th>Imagem</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>1</td>
    <td>oncinha nasa</td>
    <td>é uma sapatilha fabricada na nasa</td>
    <td>Ragazza</td>
    <td>11,00</td>
    <td>20,00</td>
    <td>20</td>
    <td>40</td>
    <td>É DE CAMURSA</td>
     <td>
      <figure>
        <img src="#"></img>
      </figure>
    </td>
  </tr>
  <tbody>
    <tfoot>
    <td>ID</td>
    <td>Nome</td>
    <td>Descricao</td>
    <td>Fornecedor</td>
    <td>Preço de custo</td>
    <td>Preço de venda</td>
    <td>Tamanhos min</td>
    <td>Tamanhos max</td>
    <td>Detalhes</td>
    <td>Imagem</td>
   </tfoot>
</table> 
</section>
