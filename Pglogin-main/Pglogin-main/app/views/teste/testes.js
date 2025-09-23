const quizData = [
  {
    question: "Qual é a linguagem de programação mais usada para desenvolvimento web frontend?",
    options: ["Python", "JavaScript", "Java", "C++"],
    correct: 1,
  },
  {
    question: "O que significa HTML?",
    options: [
      "Home Tool Markup Language",
      "Hyperlinks and Text Markup Language",
      "HyperText Markup Language",
      "Hyperlinking Text Marking Language",
    ],
    correct: 2,
  },
  {
    question: "Qual propriedade CSS é usada para alterar a cor do texto?",
    options: ["text-color", "font-color", "color", "text-style"],
    correct: 2,
  },
  {
    question: "O que é um framework?",
    options: [
      "Um tipo de banco de dados",
      "Uma estrutura de desenvolvimento de software",
      "Um editor de código",
      "Um sistema operacional",
    ],
    correct: 1,
  },
  {
    question: "Qual é a principal função do Git?",
    options: ["Editar código", "Controle de versão", "Executar programas", "Criar interfaces"],
    correct: 1,
  },
]

let currentQuestion = 0
let selectedAnswers = []
let score = 0

document.addEventListener("DOMContentLoaded", () => {
  if (document.getElementById("quizContainer")) {
    initializeQuiz()
  }
})

function initializeQuiz() {
  currentQuestion = 0
  selectedAnswers = []
  score = 0

  document.getElementById("quizResult").style.display = "none"
  document.getElementById("quizQuestion").style.display = "block"
  document.getElementById("progressFill").style.display = "block"
  document.getElementById("progressText").style.display = "block"

  showQuestion()

  document.getElementById("nextButton").addEventListener("click", nextQuestion)
  document.getElementById("restartButton").addEventListener("click", restartQuiz)
}

function showQuestion() {
  const question = quizData[currentQuestion]
  const progressPercent = ((currentQuestion + 1) / quizData.length) * 100

  document.getElementById("progressFill").style.width = progressPercent + "%"
  document.getElementById("progressText").textContent = `Pergunta ${currentQuestion + 1} de ${quizData.length}`

  document.getElementById("questionTitle").textContent = question.question

  const optionsContainer = document.getElementById("quizOptions")
  optionsContainer.innerHTML = ""

  question.options.forEach((option, index) => {
    const button = document.createElement("button")
    button.className = "quiz-option"
    button.textContent = option
    button.addEventListener("click", () => selectOption(index, button))
    optionsContainer.appendChild(button)
  })

  const nextButton = document.getElementById("nextButton")
  nextButton.disabled = true
  nextButton.textContent = currentQuestion === quizData.length - 1 ? "Finalizar Teste" : "Próxima Pergunta"
}

function selectOption(optionIndex, buttonElement) {
  document.querySelectorAll(".quiz-option").forEach((btn) => {
    btn.classList.remove("selected")
  })

  buttonElement.classList.add("selected")
  selectedAnswers[currentQuestion] = optionIndex
  document.getElementById("nextButton").disabled = false
}

function nextQuestion() {
  if (selectedAnswers[currentQuestion] === quizData[currentQuestion].correct) {
    score++
  }

  currentQuestion++

  if (currentQuestion < quizData.length) {
    showQuestion()
  } else {
    showResult()
  }
}

function showResult() {
  document.getElementById("quizQuestion").style.display = "none"
  document.querySelector(".quiz-progress").style.display = "none"
  document.querySelector(".quiz-actions").style.display = "none"
  document.getElementById("quizResult").style.display = "block"

  const percentage = Math.round((score / quizData.length) * 100)

  document.getElementById("scoreNumber").textContent = score
  document.getElementById("resultPercentage").textContent = `${percentage}% de acertos`
}

function restartQuiz() {
  document.querySelector(".quiz-progress").style.display = "block"
  document.querySelector(".quiz-actions").style.display = "block"
  initializeQuiz()
}
