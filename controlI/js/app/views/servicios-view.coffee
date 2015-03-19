class __View.Servicios extends Monocle.View
	container: "table.results"
	template: 
		"""
		<tr>
              <td><b>{{id}}</b><br>
              {{descripcion}} {{#estado}}<b>Ordenado</b>{{/estado}}
              </td>
        </tr>
		"""