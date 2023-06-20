// Define your texts
const texts = [
    'Dia 1 Sal al aire libre y realiza alguno actividad física por 10 min ',
    'Dia 2 Escribe como te sientes, como te has sentido la ultima semana y cosas que debes hacer para mejorar tu bienestar emocional mental',
    'Dia3 Hoy vas a leer algún libro que tengas pendiente te comprometerás contigo en terminar lo, hoy leerás por 15 min debes continuar todos los días',
    'Dia 4 Vas a enviar un mensaje o a llamar a los personas con las que compartes y te sientes agra decido feliz por tener los en tu vida. Les agradecerás y les dirás lo feliz que estas con tenerlos.',
    'Dia 5 Hoy hazte una mascarilla y un exfoliante mientras escuchas música o ves tu serie o película fav.',
    // Add more texts if needed
  ];
  
  // Get the current day
  const currentDate = new Date();
  const currentDay = currentDate.getDay(); // Sunday is 0, Monday is 1, and so on...
  
  // Retrieve the index of the text based on the current day
  const textIndex = currentDay % texts.length;
  
  // Display the text on the page
  const textPlaceholder = document.getElementById('text-placeholder');
  textPlaceholder.textContent = texts[textIndex];
  