$(function() {
        $("#flex1").flexigrid({
                url: 'datos.php',
                dataType: 'json',
                colModel : [
                        {display: 'N', name : 'N', width : 40, sortable : true, align: 'left'},
                        {display: 'Fecha', name : 'fecha', width : 150, sortable : true, align: 'left'},
                        {display: 'Medida(ml)', name : 'medida', width : 150, sortable : true, align: 'left'},
                        {display: 'Ubicación', name : 'ubicacion', width : 250, sortable : true, align: 'left'},
						{display: 'Latitud', name : 'latitud', width : 250, sortable : true, align: 'left'},
						{display: 'Longitud', name : 'longitud', width : 250, sortable : true, align: 'left'}
                ],
                buttons : [
                        {name: 'Edit', bclass: 'edit', onpress : doCommand},
                        {name: 'Delete', bclass: 'delete', onpress : doCommand},
                        {separator: true}
                ],
                searchitems : [
                        {display: 'Fecha', name : 'fecha'},
                        {display: 'Ubicación', name : 'ubicacion', isdefault: true}
                ],
                sortname: "N",
                sortorder: "asc",
                usepager: true,
                title: "Datos",
                useRp: true,
                rp: 10,
                showTableToggleBtn: false,
                resizable: false,
                width: 700,
                height: 370,
                singleSelect: true
        });
});