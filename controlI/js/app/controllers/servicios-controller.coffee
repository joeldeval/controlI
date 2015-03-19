class __Controller.ServiciorCtrl extends Monocle.Controller
	elements: 
		"form#servicios": "form"

	events: 
		"click a[data-name=guardar]": "onGuardar"
	
	constructor: ->
		super
		__Model.Servicios.bind "create", @bindCreate


	onGuardar: (e) ->
		e.preventDefault()
		__Model.Servicios.create  
			"id": @form.find("[name=id]").val(),
			"descripcion": @form.find("[name=descripcion]").val(),
			"estado": @form.find("[name=estado]").val()
		
		@form.find("[name=id]").val ""
		@form.find("[name=descripcion]").val ""
		@form.find("[name=estado]").val ""
	
	bindCreate: (item) ->
		$.ajax
			success: (data) ->
				console.log "respuesta", data
		view = new __View.Servicios item
		view.prepend item
		console.log "Han creado un servicio", item

servicios = new __Controller.ServiciorCtrl("div#cont-servicios"); 