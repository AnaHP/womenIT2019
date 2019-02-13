 document.getElementById("buttonIndividual").addEventListener("click", function() {
 	var fieldForm = document.getElementById("formFirst");
 	fieldForm.classList.add("hide");
 	formIndividual();
 });

 document.getElementById("buttonGroup").addEventListener("click", function() {
 	var fieldForm = document.getElementById("formFirst");
 	fieldForm.classList.add("hide");
 	formGroup();
 });

 function formIndividual(){
 	var fieldForm = document.getElementById("formSecond");
 	fieldForm.innerHTML = "";

 	var form = document.createElement("form");
 	fieldForm.appendChild(form);
 	var fieldRow1 = document.createElement("div");
 	fieldRow1.className = "row align-center";
 	form.appendChild(fieldRow1);
 	var columnLeft = document.createElement("div");
 	columnLeft.className="small-12 medium-6 columns";
 	fieldRow1.appendChild(columnLeft);
 	var formGroup1 = document.createElement("div");
 	formGroup1.className="form-group margin-bt-2"
 	columnLeft.appendChild(formGroup1);
 	var labelName = document.createElement("label");
 	labelName.innerHTML ="Nombre";
 	labelName.className="form-label";
 	labelName.setAttribute("for","nameInput");
 	formGroup1.appendChild(labelName);
 	var inputName = document.createElement("input");
 	inputName.className="form-input";
 	inputName.setAttribute("type", "text");
 	inputName.id="nameInput"
 	formGroup1.appendChild(inputName);

 	var formGroup2 = document.createElement("div");
 	formGroup2.className="form-group margin-bt-2"
 	columnLeft.appendChild(formGroup2);
 	var labelDate = document.createElement("label");
 	labelDate.innerHTML ="Fecha de Nacimiento (aaaa:mm:dd)";
 	labelDate.className="form-label";
 	labelDate.setAttribute("for","dateInput");
 	formGroup2.appendChild(labelDate);
 	var inputDate = document.createElement("input");
 	inputDate.className="form-input input-element";
 	inputDate.setAttribute("type", "tel");
 	inputDate.id="dateInput"
 	inputDate.placeholder = "";
 	formGroup2.appendChild(inputDate);

 	var formGroup3 = document.createElement("div");
 	formGroup3.className="form-group margin-bt-2"
 	columnLeft.appendChild(formGroup3);
 	var labelInstitution = document.createElement("label")
 	labelInstitution.className="label-select";
 	labelInstitution.innerHTML="Institución";
 	formGroup3.appendChild(labelInstitution);
 	var selectInstitution = document.createElement("select");
 	selectInstitution.className="form-input margin-bottom-0";
 	selectInstitution.id="institutioninput"
 	// var options = ["UAQ", "UVM"];
 	// for(var i = 0; i < options.length; i++) {
 	// 	var opt = options[i];
 	// 	var el = document.createElement("option");
 	// 	el.textContent = opt;
 	// 	el.value = opt;
 	// 	selectInstitution.appendChild(el);
 	// }
 	formGroup3.appendChild(selectInstitution);


 	// var formGroup4 = document.createElement("div");
 	// formGroup4.className="form-group margin-bt-2"
 	// columnLeft.appendChild(formGroup4);
 	// var labelEvent = document.createElement("label")
 	// labelEvent.className="label-select";
 	// labelEvent.innerHTML="¿Cómo te enteraste del evento?";
 	// formGroup4.appendChild(labelEvent);
 	// var selectEvent = document.createElement("select");
 	// selectEvent.className="form-input margin-bottom-0";
 	// var options = ["Facebook", "Institución", "Otro"];
 	// for(var i = 0; i < options.length; i++) {
 	// 	var opt = options[i];
 	// 	var el = document.createElement("option");
 	// 	el.textContent = opt;
 	// 	el.value = opt;
 	// 	selectEvent.appendChild(el);
 	// }
 	// formGroup4.appendChild(selectEvent);

 	var columnRight = document.createElement("div");
 	columnRight.className="small-12 medium-6 columns";
 	fieldRow1.appendChild(columnRight);

 	var formGroup5 = document.createElement("div");
 	formGroup5.className="form-group margin-bt-2";
 	columnRight.appendChild(formGroup5);
 	var labelName = document.createElement("label");
 	labelName.innerHTML ="Apellidos";
 	labelName.className="form-label";
 	labelName.setAttribute("for","lastNameInput");
 	formGroup5.appendChild(labelName);
 	var inputLastName = document.createElement("input");
 	inputLastName.className="form-input";
 	inputLastName.setAttribute("type", "text");
 	inputLastName.id="lastNameInput"
 	formGroup5.appendChild(inputLastName);

 	var formGroup6 = document.createElement("div");
 	formGroup6.className="form-group margin-bt-2";
 	columnRight.appendChild(formGroup6);
 	var labelName = document.createElement("label");
 	labelName.innerHTML ="Correo Electrónico";
 	labelName.className="form-label";
 	labelName.setAttribute("for","emailInput");
 	formGroup6.appendChild(labelName);
 	var inputLastEmail = document.createElement("input");
 	inputLastEmail.className="form-input";
 	inputLastEmail.setAttribute("type", "email");
 	inputLastEmail.id="emailInput"
 	formGroup6.appendChild(inputLastEmail);

 	var formGroup7 = document.createElement("div");
 	formGroup7.className="form-group margin-bt-2"
 	columnRight.appendChild(formGroup7);
 	var labelOccupation = document.createElement("label")
 	labelOccupation.className="label-select";
 	labelOccupation.innerHTML="Ocupación";
 	formGroup7.appendChild(labelOccupation);
 	var selectOccupation = document.createElement("select");
 	selectOccupation.className="form-input margin-bottom-0";
 	selectOccupation.id="occupationInput";
 	// var options = ["Estudiante", "Profesora", "Otro"];
 	// for(var i = 0; i < options.length; i++) {
 	// 	var opt = options[i];
 	// 	var el = document.createElement("option");
 	// 	el.textContent = opt;
 	// 	el.value = opt;
 	// 	selectOccupation.appendChild(el);
 	// }
 	formGroup7.appendChild(selectOccupation);

 	var columnCenter = document.createElement("div");
 	columnCenter.className="large-6 medium-12 small-12 columns";
 	fieldRow1.appendChild(columnCenter);
 	var formGroup4 = document.createElement("div");
 	formGroup4.className="form-group margin-top-0 margin-bt-2"
 	columnCenter.appendChild(formGroup4);
 	var labelEvent = document.createElement("label")
 	labelEvent.className="label-select";
 	labelEvent.innerHTML="¿Cómo te enteraste del evento?";
 	formGroup4.appendChild(labelEvent);
 	var selectEvent = document.createElement("select");
 	selectEvent.className="form-input margin-bottom-0";
 	selectEvent.id="eventInput";
 	// var options = ["Facebook", "Institución", "Otro"];
 	// for(var i = 0; i < options.length; i++) {
 	// 	var opt = options[i];
 	// 	var el = document.createElement("option");
 	// 	el.textContent = opt;
 	// 	el.value = opt;
 	// 	selectEvent.appendChild(el);
 	// }
 	formGroup4.appendChild(selectEvent);
 	var columnCheck = document.createElement("div");
 	columnCheck.className="large-6 medium-12 small-12 columns";
 	fieldRow1.appendChild(columnCheck);
//  	var fieldsetCheck = document.createElement("fieldset");
//  	columnCheck.appendChild(fieldsetCheck);
//  	var legendCheck = document.createElement("legend");
//  	legendCheck.innerHTML="Será en línea o asistir"
//  	fieldsetCheck.appendChild(legendCheck);
//  	var fieldCheck1 = document.createElement("div");
//  	fieldCheck1.className="field-check";
//  	fieldsetCheck.appendChild(fieldCheck1);
//  	var checkOnline = document.createElement("input");
//  	checkOnline.setAttribute("type", "checkbox");
//  	checkOnline.setAttribute("name", "linea");
//  	fieldCheck1.appendChild(checkOnline);
//  	var labelCheckOnline = document.createElement("label");
//  	labelCheckOnline.innerHTML="En línea";
//  	fieldCheck1.appendChild(labelCheckOnline);
// var fieldCheck2 = document.createElement("div");
//  	fieldCheck2.className="field-check";
//  	columnCheck.appendChild(fieldCheck2);
//  	var checkOnline2 = document.createElement("input");
//  	checkOnline2.setAttribute("type", "checkbox");
//  	checkOnline2.setAttribute("name", "asistir");
//  	fieldCheck2.appendChild(checkOnline2);
//  	var labelCheckOnline2 = document.createElement("label");
//  	labelCheckOnline2.innerHTML="Asistire al evento";
//  	fieldCheck2.appendChild(labelCheckOnline2);

 	var columnButton = document.createElement("div");
 	columnButton.className="large-12 columns";
 	fieldRow1.appendChild(columnButton);
 	var rowButton = document.createElement("div");
 	rowButton.className="row align-right";
 	columnButton.appendChild(rowButton);
 	var columnButton2 = document.createElement("div");
 	columnButton2.className="large-3 columns"
 	rowButton.appendChild(columnButton2);
 	var buttonBack = document.createElement("a");
 	buttonBack.className="button link-menu white width-100 margin-bottom-0";
 	buttonBack.innerHTML="Regresar";
 	columnButton2.appendChild(buttonBack);
 	buttonBack.addEventListener("click", function(){
 		var fieldForm = document.getElementById("formFirst");
 		fieldForm.classList.remove("hide");
 		fieldForm.classList.add("show");
 		var fieldFormSecond = document.getElementById("formSecond")
 		fieldFormSecond.innerHTML="";
 	})
 	var columnButton1=document.createElement("div");
 	columnButton1.className="large-3 columns";
 	rowButton.appendChild(columnButton1);
 	var buttonRegister = document.createElement("a");
 	buttonRegister.className="button link-menu button-accept width-100 margin-bottom-0";
 	buttonRegister.innerHTML="Regístrate";
 	buttonRegister.id="register";
 	buttonRegister.onclick = registrar;
 	columnButton1.appendChild(buttonRegister);
 	animationLabel();
 	dateInpuntCleave();
 }

 function formGroup(){
 	var fieldForm = document.getElementById("formSecond");
 	fieldForm.innerHTML = "";

 	var form = document.createElement("form");
 	form.style="height: 100%;"
 	fieldForm.appendChild(form);
 	var fieldRow1 = document.createElement("div");
 	fieldRow1.className = "row align-center";
 	form.appendChild(fieldRow1);
 	var columnLeft = document.createElement("div");
 	columnLeft.className="small-12 medium-6 columns";
 	fieldRow1.appendChild(columnLeft);

 	var formGroup1 = document.createElement("div");
 	formGroup1.className="form-group margin-bt-2"
 	columnLeft.appendChild(formGroup1);
 	var labelName = document.createElement("label");
 	labelName.innerHTML ="Nombre del Encargado";
 	labelName.className="form-label";
 	labelName.setAttribute("for","nameInput");
 	formGroup1.appendChild(labelName);
 	var inputName = document.createElement("input");
 	inputName.className="form-input";
 	inputName.setAttribute("type", "text");
 	inputName.id="nameInput"
 	formGroup1.appendChild(inputName);

 	var columnRight = document.createElement("div");
 	columnRight.className="small-12 medium-6 columns";
 	fieldRow1.appendChild(columnRight);

 	var formGroup2 = document.createElement("div");
 	formGroup2.className="form-group margin-bt-2";
 	columnRight.appendChild(formGroup2);
 	var labelInstitutionGroup = document.createElement("label")
 	labelInstitutionGroup.className="label-select";
 	labelInstitutionGroup.innerHTML="Institución";
 	formGroup2.appendChild(labelInstitutionGroup);
 	var selectInstitutionGroup = document.createElement("select");
 	selectInstitutionGroup.className="form-input margin-bottom-0";
 	var options = ["UAQ", "UVM"];
 	for(var i = 0; i < options.length; i++) {
 		var opt = options[i];
 		var el = document.createElement("option");
 		el.textContent = opt;
 		el.value = opt;
 		selectInstitutionGroup.appendChild(el);
 	}
 	formGroup2.appendChild(selectInstitutionGroup);

 	var rowData = document.createElement("div");
 	rowData.className="row";
 	// rowData.style="height: calc(100% - 11rem";
 	form.appendChild(rowData);
 	var fieldTitleGroup = document.createElement("div");
 	fieldTitleGroup.className="large-12 text-left columns";
 	rowData.appendChild(fieldTitleGroup);
 	var titleGroup = document.createElement("h3");
 	titleGroup.className="dark-blue-color";
 	titleGroup.innerHTML="Registrar Personas"
 	fieldTitleGroup.appendChild(titleGroup);
 	var containerBottom = document.createElement("div");
 	containerBottom.className="height-bottom scroll-y";
 	containerBottom.id="containerBottom";
 	form.appendChild(containerBottom);

 	var fieldBottom = document.createElement("div");
 	fieldBottom.className="hola";
 	form.appendChild(fieldBottom);

 	var rowButtonRegister = document.createElement("div");
 	rowButtonRegister.className="row";
 	fieldBottom.appendChild(rowButtonRegister);
 	var columnRegister = document.createElement("div");
 	columnRegister.className="large-12 columns";
 	rowButtonRegister.appendChild(columnRegister);
 	var registerButton = document.createElement("a");
 	registerButton.className="button";
 	registerButton.innerHTML="Registar";
 	columnRegister.appendChild(registerButton);


 	var fieldDataGroup = document.createElement("div");
 	fieldDataGroup.className="row";
 	containerBottom.appendChild(fieldDataGroup);
 	var columnData1 = document.createElement("div");
 	columnData1.className="large-5 columns";
 	fieldDataGroup.appendChild(columnData1);
 	var formInputGroup1 = document.createElement("div");
 	formInputGroup1.className="form-group margin-bt-2"
 	columnData1.appendChild(formInputGroup1);
 	var labelName = document.createElement("label");
 	labelName.innerHTML ="Nombre";
 	labelName.className="form-label";
 	labelName.setAttribute("for","nameInputGroup");
 	formInputGroup1.appendChild(labelName);
 	var inputNameGroup = document.createElement("input");
 	inputNameGroup.className="form-input";
 	inputNameGroup.setAttribute("type", "text");
 	inputNameGroup.id="nameInputGroup"
 	formInputGroup1.appendChild(inputNameGroup);
 	var columnData2 = document.createElement("div");
 	columnData2.className="large-5 columns";
 	fieldDataGroup.appendChild(columnData2);
 	var formInputGroup1 = document.createElement("div");
 	formInputGroup1.className="form-group margin-bt-2"
 	columnData2.appendChild(formInputGroup1);
 	var labelEmailGroup = document.createElement("label");
 	labelEmailGroup.innerHTML ="Correo Electrónico";
 	labelEmailGroup.className="form-label";
 	labelEmailGroup.setAttribute("for","emailInputGroup");
 	formInputGroup1.appendChild(labelEmailGroup);
 	var inputNameGroup = document.createElement("input");
 	inputNameGroup.className="form-input";
 	inputNameGroup.setAttribute("type", "email");
 	inputNameGroup.id="emailInputGroup"
 	formInputGroup1.appendChild(inputNameGroup);
 	var columnData3 = document.createElement("div");
 	columnData3.className="large-1 columns";
 	fieldDataGroup.appendChild(columnData3);
 	var columnData4 = document.createElement("div");
 	columnData4.className="large-1 columns";
 	fieldDataGroup.appendChild(columnData4);
 	var buttonDelete = document.createElement("a");
 	buttonDelete.className="button";
 	buttonDelete.innerHTML="Eliminar"
 	columnData3.appendChild(buttonDelete);
 	var iconDelete = document.createElement("i");
 	iconDelete.className="fas fa-user-minus";
 	buttonDelete.appendChild(iconDelete);
 	var buttonAdd = document.createElement("a");
 	buttonAdd.className="button buttonAdd";
 	buttonAdd.innerHTML="Agregar"
 	buttonAdd.id="buttonAdd";
 	columnData4.appendChild(buttonAdd);
 	var iconAdd = document.createElement("i");
 	iconAdd.className="fas fa-user-minus";
 	buttonAdd.appendChild(iconAdd);
 	document.getElementById("buttonAdd").addEventListener("click", function() {
 		addPerson();
 	});






 	animationLabel();
 }


 function addPerson(){
 	var buttonAddPast = document.querySelector(".buttonAdd");
 	buttonAddPast.parentNode.removeChild(buttonAddPast);


 	var fieldDataGroup = document.createElement("div");
 	fieldDataGroup.className="row";
 	containerBottom.appendChild(fieldDataGroup);
 	var columnData1 = document.createElement("div");
 	columnData1.className="large-5 columns";
 	fieldDataGroup.appendChild(columnData1);
 	var formInputGroup1 = document.createElement("div");
 	formInputGroup1.className="form-group margin-bt-2"
 	columnData1.appendChild(formInputGroup1);
 	var labelName = document.createElement("label");
 	labelName.innerHTML ="Nombre";
 	labelName.className="form-label";
 	labelName.setAttribute("for","nameInputGroup");
 	formInputGroup1.appendChild(labelName);
 	var inputNameGroup = document.createElement("input");
 	inputNameGroup.className="form-input";
 	inputNameGroup.setAttribute("type", "text");
 	inputNameGroup.id="nameInputGroup"
 	formInputGroup1.appendChild(inputNameGroup);
 	var columnData2 = document.createElement("div");
 	columnData2.className="large-5 columns";
 	fieldDataGroup.appendChild(columnData2);
 	var formInputGroup1 = document.createElement("div");
 	formInputGroup1.className="form-group margin-bt-2"
 	columnData2.appendChild(formInputGroup1);
 	var labelEmailGroup = document.createElement("label");
 	labelEmailGroup.innerHTML ="Correo Electrónico";
 	labelEmailGroup.className="form-label";
 	labelEmailGroup.setAttribute("for","emailInputGroup");
 	formInputGroup1.appendChild(labelEmailGroup);
 	var inputNameGroup = document.createElement("input");
 	inputNameGroup.className="form-input";
 	inputNameGroup.setAttribute("type", "email");
 	inputNameGroup.id="emailInputGroup"
 	formInputGroup1.appendChild(inputNameGroup);
 	var columnData3 = document.createElement("div");
 	columnData3.className=" large-1 columns";
 	fieldDataGroup.appendChild(columnData3);
 	var columnData4 = document.createElement("div");
 	columnData4.className="large-1 columns";
 	fieldDataGroup.appendChild(columnData4);
 	var buttonDelete = document.createElement("a");
 	buttonDelete.className="button";
 	buttonDelete.innerHTML="Eliminar"
 	columnData3.appendChild(buttonDelete);
 	var iconDelete = document.createElement("i");
 	iconDelete.className="fas fa-user-minus";
 	buttonDelete.appendChild(iconDelete);
 	var buttonAdd = document.createElement("a");
 	buttonAdd.className="button buttonAdd";
 	buttonAdd.innerHTML="Agregar"
 	buttonAdd.id="buttonAdd";
 	columnData4.appendChild(buttonAdd);
 	var iconAdd = document.createElement("i");
 	iconAdd.className="fas fa-user-minus";
 	buttonAdd.appendChild(iconAdd);
 	document.getElementById("buttonAdd").addEventListener("click", function() {
 		addPerson();
 	});
 }
