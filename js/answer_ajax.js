$(document).ready(function(){
	$("#imgLoad").hide(); // Скрываем прелоадер
});

var num = 5; //чтобы знать с какой записи вытаскивать данные

$(function() {
	$("#load div").click(function(){ // Выполняем если по кнопке кликнули
		
		$("#imgLoad").show(); // Показываем прелоадер
		
		$.ajax({
			url: "../handler/lazy_content.php", // Обработчик
			type: "GET",       // Отправляем методом GET
			data: {"num": num},
			cache: false,			
			success: function(response){
				if(response == 0){ // Смотрим ответ от сервера и выполняем соответствующее действие
					alert("Больше нет записей");
					$("#imgLoad").hide();
				}else{
					$("#content").append(response);
					num = num + 5;
					$("#imgLoad").hide();
				}
			}
		});
	});
});
