<section>
  <div id="corpo_crud_fornecedores">
    <form>	
		<!-- <textarea name="descricao" cols="10" rows="10"></textarea> -->
		<fieldset>
			<legend> Informações sobre o fornecedor </legend>
      <label>ID:
			<input type="text" name="id" disabled="true" readonly='true'></label>
			</label>
      <label>Nome:
			<input type="text" name="" required="true"></label>
			</label>
			<label>Site:
			<input type="url" name=""></label>
			</label>
			<label>CNPJ:
			<input type="number" t name="" placeholder="xxx.xxx.xxx-60"></label>
			</label>
			<label>E-mail:
			<input type="email" t name=""></label>
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
    <th>Site</th>
    <th>CNPJ</th>
    <th>E-mail</th>
    <th>Telefone</th>
    <th>Foto</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>1</td>
    <td>sapatilhas</td>
    <td>www.teste.com</td>
    <td>091.098.789-69</td>
    <td>teste@gmail.com</td>
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
    <td>Site</td>
    <td>CNPJ</td>
    <td>E-mail</td>
    <td>Telefone</td>
    <td>Foto</td>
   </tfoot>
</table> 
</section>
