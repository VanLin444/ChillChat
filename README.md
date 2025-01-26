ChillChat — это веб-приложение для общения, которое включает в себя функциональность регистрации пользователей, авторизации, отображения списка пользователей и функционал самого чата.  
Требования к функциональности:  
1.	Страница регистрации:  
  •	Поля ввода: имя пользователя, электронная почта, пароль и изображение.  
  •	Проверка уникальности имени пользователя и электронной почты.  
  •	Индикация успешной регистрации или ошибок.  
2.	Страница авторизации:  
  •	Поля ввода: электронная почта, пароль.  
  •	Валидация введённых данных.  
  •	Сообщение об ошибках в случае неправильных данных.  
3.	Список пользователей:  
  •	Отображение списка зарегистрированных пользователей в виде таблицы.  
  •	Возможность поиска по имени пользователя.  
  •	Обновление списка в реальном времени.  
4.	Чат:  
  •	Возможность отправки и получения текстовых сообщений.
5. Безопасность:
  • Хранение паролей в виде хешей (например, с использованием password_hash в PHP).
  • Защита от SQL-инъекций с помощью подготовленных выражений.  
6.	Технические требования:  
  Языки программирования: PHP для серверной части, JavaScript для клиентской части.  
  База данных: MySQL для хранения информации о пользователях и сообщениях.  
  Frontend: Использование HTML, CSS, и JavaScript для интерфейса.  
  Backend: Обработка запросов с использованием PHP.  

Реализация проекта : http://chillchat.sovagithub.beget.tech/
