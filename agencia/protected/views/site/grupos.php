<?php


$this->pageTitle=Yii::app()->name . ' - Grupos';
$this->breadcrumbs=array(
	'Grupos',
);
?>

<header class="jumbotron my-4">
    <h1 class="display-3">Bienvenido <?php echo Yii::app()->user->name ?>#<?php echo Yii::app()->user->id ?>!</h1>
    <p class="lead">Aqui puedes ver a que grupos perteneces</p>
    <a href="#" id="NewGroupBtn" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">Nuevo Grupo</a>
</header>

<div class="row text-center" id="GroupListContainer">


</div>

<!-- Modal New Group-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos del Grupo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-group" id="formulario">
            <label for="InputGroupName">Nombre del Grupo</label>
            <input type="text" name="name" class="form-control" id="InputGroupName" placeholder="Nombre del Grupo">
            <br>
            <label for="Selected-Users">Usuarios del Grupo</label>
            <select id='Selected-Users' name="users" multiple='multiple'></select>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" id="BtnSaveGroup">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal AddMoney-->
<div class="modal fade" id="ModalMoney" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añade dinero al bote de <span id="ModalAMT"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-group" id="formularioMoney">
            <label for="InputGroupName">Cantidad</label>
            <input type="number" step="0.01" name="bote" class="form-control" id="InputGroupName" placeholder="Nombre del Grupo">
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" id="BtnSaveGroup">Guardar</button>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.multi-select.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/multi-select.css">

<script>

Base_Url = "<?php echo Yii::app()->request->baseUrl; ?>/index.php";

Url_Users = "/api/usuarios";

Url_Groups = "/api/grupos";

AUser_ID = <?php echo Yii::app()->user->id ?>;

User_List = {};

Group_List = {};

window.onload = function() {
    
    //Get a usuarios
    $.get( Base_Url+Url_Users, function( data ) {
        OrderUsers(JSON.parse(data));
        PrintUsers(JSON.parse(data));

        //Get a grupos en los que estas
        $.get( Base_Url+Url_Groups+'/'+AUser_ID, function( data ) {
            Group_List=JSON.parse(data);
            PrintGroups(Group_List);
        });

    });

    $('#BtnSaveGroup').on( "click", CreateNewGroup )

};

//Funcion pintar usuarios

function PrintUsers(Data){

    $('#Selected-Users').html(Data.map(function(User){
        Selected = User.id == AUser_ID ? "selected disabled" : "";
        return "<option value='"+User.id+"' "+ Selected +">"+User.username+"</option>"
    }))

    $('#Selected-Users').multiSelect()

}

//Funcion pintar cajas de grupos

function PrintGroups(Data){

    $('#GroupListContainer').html(Data.map(function(Group){

        let Gbody = Group.users.map(function(User){
            return '<li class="list-group-item" style="display:flex" ><p class="text-left" style="width:50%;margin:0">' + User_List[User.user_id].username +'#'+User.user_id+'</p><p class="text-right" style="color:green;width:50%;margin:0">' + User.bote + '$</p></li>';
        })

        return `<div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="" alt="">
                <div class="card-body">
                <h4 class="card-title">${Group.name}</h4>
                <ul class="list-group list-group-flush">${Gbody.join('')}</ul>
                </div>
                <div class="card-footer">
                <a href="#" class="btn btn-primary AddMoneyTo" data-groupName="${Group.name}" data-groupID="${Group.users[0].group_id}" >Agregar Dinero</a>
                <a href="#" class="btn btn-primary">Modificar</a>
                </div>
            </div>
        </div>`;


    }))

    $('.AddMoneyTo').on( "click", AddMoneyModal )

}

function CreateNewGroup(){

    let Data = formToJSON($('#formulario')[0]);

    Data.users.push(AUser_ID);

    $.post(Base_Url+Url_Groups, Data, function(data){

      console.log(JSON.parse(data));
      Group_List.push(JSON.parse(data));
      PrintGroups(Group_List);
      $('#exampleModal').modal('hide');

    });

}

//Funciones añadir cash

function AddMoneyModal(){

  $('#ModalMoney').modal('show');
  $('#ModalAMT').html(this.dataset.groupname);

}

//Funcion formato

function formToJSON (e){
    
    var array = {};
    
    for (var x=0;e.elements.length>x;x++){
        
        if ((typeof e.elements[x].name !== 'undefined' &&e.elements[x].name !== '') && (e.elements[x].type !== 'checkbox' ||e.elements[x].checked)) {
            
            array[e.elements[x].name] = $(e.elements[x]).val()
        
        }
    }
    
    return array;
        
}

function OrderUsers(Data){
    Data.map(function(obj){
        User_List[obj.id] = obj;
    })
}

</script>