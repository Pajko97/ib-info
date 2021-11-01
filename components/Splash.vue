<template>
    <div class="flex h-screen bg-black flex-col justify-center pt-20 pb-20 items-center">
        <img src="../static/images/logo.svg"/>
     <h1 class="text-6xl text-white">I-Business card </h1>
     <h2 class="text-6xl text-white">Welcome to the new way of networking.</h2>
    </div>
</template>


<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap');

.theme-color-1 {
    background-color: #231F20;
}
h2 {
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid white; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .15em; /* Adjust as needed */
  animation: 
    typing 3.5s steps(40, end),
    blink-caret .75s step-end infinite;
}

@keyframes typing {
  from { width: 0 }
  to { width: 60% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: white; }
}

* {
    font-family: 'Nunito Sans';
}
</style>
