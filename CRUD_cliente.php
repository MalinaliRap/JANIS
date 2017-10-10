<section>
  <div id="corpo_crud_cliente">
    <form>	
		<!-- <textarea name="descricao" cols="10" rows="10"></textarea> -->
		<fieldset>
			<legend> Informações sobre o cliente </legend>
      <label>ID:
			<input type="text" name="id" disabled="true"></label>
			</label>
      <label>Nome:
			<input type="text" name="" required="true"></label>
			</label>
			<label>Idade:
			<input type="number" name="" disable="true"></label>
			</label>
			<label>CPF:
			<input type="number" t name="" placeholder="xxx.xxx.xxx-60"></label>
			</label>
			<label>Telefone:
			<input type="tel" name="" pattern="\(0-9)+\)[0-9]{5}-[0-9]{4}"></label>
			</label>
      <label>Imagem:
      <input type="file" name="imagem">
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

      <output name="imagem" for="imagem">   </output>
		</fieldset>	
</form> 
  </div>

 <table style="width:100%">
  <thead>
   <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Idade</th>
    <th>CPF</th>
    <th>Telefone</th>
    <th>Foto</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>1</td>
    <td>Smith</td>
    <td>50</td>
    <td>091.098.789-69</td>
    <td>4299998870</td>
       <td>
      <figure>
        <img src="#"></img>
      </figure>
    </td>
  </tr>
  <tr>
    <td>2</td>
    <td>Jackson</td>
    <td>94</td>
    <td>091.098.789-69</td>
    <td>4299998870</td>
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
    <td>Idade</td>
    <td>CPF</td>
    <td>Telefone</td>
    <td>
      <figure>
        <img src="#"></img>
      </figure>
    </td>
   </tfoot>
</table> 
</section>