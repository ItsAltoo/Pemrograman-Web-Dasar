// =============================================================================
// 1. DEMO: DOM SELECTION
// =============================================================================
function selectById() {
  const element = document.getElementById("demo-paragraph");
  const output = document.getElementById("selection-output");

  element.style.backgroundColor = "yellow";
  output.innerHTML = `
                <strong>getElementById():</strong><br>
                Selected element: ${element.tagName} with id "${element.id}"<br>
                Text content: "${element.textContent}"
            `;
  output.style.display = "block";

  console.log("Selected by ID:", element);
}

function selectByClass() {
  const elements = document.getElementsByClassName("demo-text");
  const output = document.getElementById("selection-output");

  // Reset styles
  for (let elem of elements) {
    elem.style.backgroundColor = "";
  }

  // Highlight first element
  if (elements.length > 0) {
    elements[0].style.backgroundColor = "lightblue";
  }

  output.innerHTML = `
                <strong>getElementsByClassName():</strong><br>
                Found ${elements.length} elements with class "demo-text"<br>
                First element highlighted in blue
            `;
  output.style.display = "block";

  console.log("Selected by class:", elements);
}

function selectByQuerySelector() {
  const element = document.querySelector(".demo-text");
  const output = document.getElementById("selection-output");

  // Reset all styles first
  const allElements = document.querySelectorAll(".demo-text");
  allElements.forEach((elem) => (elem.style.backgroundColor = ""));

  element.style.backgroundColor = "lightgreen";

  output.innerHTML = `
                <strong>querySelector():</strong><br>
                Selected first element with class "demo-text"<br>
                Element highlighted in green
            `;
  output.style.display = "block";

  console.log("Selected by querySelector:", element);
}

function selectAll() {
  const elements = document.querySelectorAll(".demo-text");
  const output = document.getElementById("selection-output");

  elements.forEach((elem, index) => {
    elem.style.backgroundColor = `hsl(${index * 60}, 70%, 80%)`;
  });

  output.innerHTML = `
                <strong>querySelectorAll():</strong><br>
                Selected ${elements.length} elements with class "demo-text"<br>
                Each element highlighted with different color
            `;
  output.style.display = "block";

  console.log("Selected all elements:", elements);
}

// =============================================================================
// 2. DEMO: MENGUBAH KONTEN
// =============================================================================
function changeInnerHTML() {
  const element = document.getElementById("content-demo");
  element.innerHTML =
    '<strong>Konten HTML</strong> dengan <em>formatting</em> dan <a href="#">link</a>';
}

function changeTextContent() {
  const element = document.getElementById("content-demo");
  element.textContent = "Konten text biasa tanpa HTML formatting";
}

function changeInnerText() {
  const element = document.getElementById("content-demo");
  element.innerText = "Konten dengan innerText\n(newline akan ditampilkan)";
}

function resetContent() {
  const element = document.getElementById("content-demo");
  element.innerHTML = "Konten awal yang akan diubah";
}

// =============================================================================
// 3. DEMO: MENGUBAH ATRIBUT
// =============================================================================
function changeImageSource() {
  const image = document.getElementById("demo-image");
  image.src = "https://via.placeholder.com/200x150/4CAF50/FFFFFF?text=Changed";
  image.alt = "Gambar telah diubah";

  const info = document.getElementById("attribute-info");
  info.innerHTML = `
                <strong>Atribut diubah:</strong><br>
                src: ${image.src}<br>
                alt: ${image.alt}
            `;
  info.style.display = "block";
}

function changeImageAttributes() {
  const image = document.getElementById("demo-image");
  image.setAttribute("title", "Gambar dengan title baru");
  image.setAttribute("width", "250");
  image.setAttribute("height", "180");

  const info = document.getElementById("attribute-info");
  info.innerHTML = `
                <strong>Atribut ditambahkan:</strong><br>
                title: ${image.getAttribute("title")}<br>
                width: ${image.getAttribute("width")}<br>
                height: ${image.getAttribute("height")}
            `;
  info.style.display = "block";
}

function resetImage() {
  const image = document.getElementById("demo-image");
  image.src = "https://via.placeholder.com/200x150/2196F3/FFFFFF?text=Original";
  image.alt = "Demo Image";
  image.removeAttribute("title");
  image.removeAttribute("width");
  image.removeAttribute("height");

  document.getElementById("attribute-info").style.display = "none";
}

// =============================================================================
// 4. DEMO: MENGUBAH STYLE
// =============================================================================
function changeColors() {
  const element = document.getElementById("style-demo");
  element.style.color = "white";
  element.style.backgroundColor = "#f44336";
  element.style.transition = "all 0.3s ease";
}

function changeSize() {
  const element = document.getElementById("style-demo");
  element.style.fontSize = "24px";
  element.style.padding = "30px";
  element.style.fontWeight = "bold";
}

function toggleVisibility() {
  const element = document.getElementById("style-demo");
  if (element.style.display === "none") {
    element.style.display = "block";
  } else {
    element.style.display = "none";
  }
}

function addBorder() {
  const element = document.getElementById("style-demo");
  element.style.border = "5px dashed #2196F3";
  element.style.borderRadius = "15px";
}

function resetStyles() {
  const element = document.getElementById("style-demo");
  element.style = ""; // Reset semua inline styles
  element.className = "styled-box"; // Reset ke class original
}

// =============================================================================
// 5. DEMO: MENAMBAH DAN MENGHAPUS ELEMEN
// =============================================================================
function addItem() {
  const input = document.getElementById("new-item-text");
  const list = document.getElementById("demo-list");

  if (input.value.trim() === "") {
    alert("Silakan masukkan text untuk item baru!");
    return;
  }

  const newItem = document.createElement("li");
  newItem.textContent = input.value;
  newItem.style.backgroundColor = "#e8f5e8";

  list.appendChild(newItem);
  input.value = ""; // Clear input

  console.log("Item baru ditambahkan:", newItem);
}

function removeLastItem() {
  const list = document.getElementById("demo-list");
  const lastItem = list.lastElementChild;

  if (lastItem) {
    list.removeChild(lastItem);
    console.log("Item terakhir dihapus");
  } else {
    alert("Tidak ada item untuk dihapus!");
  }
}

function clearAllItems() {
  const list = document.getElementById("demo-list");
  list.innerHTML = "";
  console.log("Semua item dihapus");
}

function resetList() {
  const list = document.getElementById("demo-list");
  list.innerHTML = `
                <li>Item 1</li>
                <li>Item 2</li>
                <li>Item 3</li>
            `;
  console.log("List direset ke kondisi awal");
}

// =============================================================================
// 6. DEMO: EVENT HANDLING
// =============================================================================
let clickCount = 0;

// Event listeners
document.addEventListener("DOMContentLoaded", function () {
  // Click counter
  const clickBtn = document.getElementById("click-counter-btn");
  clickBtn.addEventListener("click", function () {
    clickCount++;
    this.textContent = `Klik saya! (${clickCount})`;

    const output = document.getElementById("event-output");
    output.innerHTML = `<strong>Click Event:</strong> Button diklik ${clickCount} kali`;
    output.style.display = "block";
  });

  // Hover events
  const hoverBtn = document.getElementById("hover-btn");
  hoverBtn.addEventListener("mouseover", function () {
    this.style.backgroundColor = "#4CAF50";
    this.textContent = "Mouse Over!";
  });

  hoverBtn.addEventListener("mouseout", function () {
    this.style.backgroundColor = "#2196F3";
    this.textContent = "Hover saya!";
  });

  // Input events
  const inputDemo = document.getElementById("input-demo");
  inputDemo.addEventListener("input", function () {
    const output = document.getElementById("event-output");
    output.innerHTML = `<strong>Input Event:</strong> Anda mengetik: "${this.value}"`;
    output.style.display = "block";
  });

  inputDemo.addEventListener("focus", function () {
    this.style.backgroundColor = "#e3f2fd";
  });

  inputDemo.addEventListener("blur", function () {
    this.style.backgroundColor = "";
  });
});

// =============================================================================
// 7. DEMO: FORM HANDLING
// =============================================================================
document.getElementById("demo-form").addEventListener("submit", function (e) {
  e.preventDefault(); // Mencegah form submit

  const name = document.getElementById("form-name").value;
  const email = document.getElementById("form-email").value;
  const category = document.getElementById("form-category").value;
  const agree = document.getElementById("form-agree").checked;

  const output = document.getElementById("form-output");

  if (!agree) {
    output.innerHTML =
      '<strong style="color: red;">Error:</strong> Anda harus menyetujui syarat dan ketentuan!';
    output.style.backgroundColor = "#ffebee";
    output.style.borderColor = "#f44336";
  } else {
    output.innerHTML = `
                    <strong>Data Form Berhasil Disubmit:</strong><br>
                    Nama: ${name}<br>
                    Email: ${email}<br>
                    Kategori: ${category || "Tidak dipilih"}<br>
                    Setuju: ${agree ? "Ya" : "Tidak"}
                `;
    output.style.backgroundColor = "#e8f5e8";
    output.style.borderColor = "#4CAF50";
  }

  output.style.display = "block";

  console.log("Form data:", { name, email, category, agree });
});

function clearForm() {
  document.getElementById("demo-form").reset();
  document.getElementById("form-output").style.display = "none";
}

// =============================================================================
// 8. DEMO: TODO LIST
// =============================================================================
let todoCounter = 1;

function addTodo() {
  const input = document.getElementById("todo-input");
  const todoList = document.getElementById("todo-list");

  if (input.value.trim() === "") {
    alert("Silakan masukkan task!");
    return;
  }

  const todoItem = document.createElement("li");
  todoItem.innerHTML = `
                <span class="todo-text">${input.value}</span>
                <button onclick="toggleTodo(this)" style="margin-left: 10px; background-color: #4CAF50;">✓</button>
                <button onclick="deleteTodo(this)" style="margin-left: 5px; background-color: #f44336;">✗</button>
            `;
  todoItem.id = `todo-${todoCounter++}`;

  todoList.appendChild(todoItem);
  input.value = "";
  updateTodoStats();
}

function toggleTodo(button) {
  const todoItem = button.parentElement;
  const todoText = todoItem.querySelector(".todo-text");

  if (todoText.style.textDecoration === "line-through") {
    todoText.style.textDecoration = "";
    todoText.style.color = "";
    todoItem.style.backgroundColor = "";
    button.textContent = "✓";
    button.style.backgroundColor = "#4CAF50";
  } else {
    todoText.style.textDecoration = "line-through";
    todoText.style.color = "#888";
    todoItem.style.backgroundColor = "#f0f0f0";
    button.textContent = "↻";
    button.style.backgroundColor = "#ff9800";
  }

  updateTodoStats();
}

function deleteTodo(button) {
  const todoItem = button.parentElement;
  todoItem.remove();
  updateTodoStats();
}

function clearCompleted() {
  const todoList = document.getElementById("todo-list");
  const completedTodos = todoList.querySelectorAll(
    'li span[style*="line-through"]'
  );

  completedTodos.forEach((todo) => {
    todo.parentElement.remove();
  });

  updateTodoStats();
}

function clearAllTodos() {
  document.getElementById("todo-list").innerHTML = "";
  updateTodoStats();
}

function updateTodoStats() {
  const todoList = document.getElementById("todo-list");
  const totalTodos = todoList.children.length;
  const completedTodos = todoList.querySelectorAll(
    'span[style*="line-through"]'
  ).length;
  const activeTodos = totalTodos - completedTodos;

  const stats = document.getElementById("todo-stats");

  if (totalTodos > 0) {
    stats.innerHTML = `
                    <strong>Todo Statistics:</strong><br>
                    Total: ${totalTodos} | Active: ${activeTodos} | Completed: ${completedTodos}
                `;
    stats.style.display = "block";
  } else {
    stats.style.display = "none";
  }
}

// =============================================================================
// 9. DEMO: NAVIGASI DOM TREE
// =============================================================================
function highlightParent() {
  clearHighlights();
  const child2 = document.getElementById("child2");
  const parent = child2.parentElement;

  parent.style.backgroundColor = "lightblue";
  parent.style.border = "3px solid blue";

  const info = document.getElementById("navigation-info");
  info.innerHTML = `
                <strong>Parent Element:</strong><br>
                Tag: ${parent.tagName}<br>
                Class: ${parent.className}<br>
                Text content: "${parent.textContent.trim()}"
            `;
  info.style.display = "block";
}

function highlightSiblings() {
  clearHighlights();
  const child2 = document.getElementById("child2");

  // Previous sibling
  const prevSibling = child2.previousElementSibling;
  if (prevSibling) {
    prevSibling.style.backgroundColor = "lightgreen";
    prevSibling.style.border = "2px solid green";
  }

  // Next sibling
  const nextSibling = child2.nextElementSibling;
  if (nextSibling) {
    nextSibling.style.backgroundColor = "lightyellow";
    nextSibling.style.border = "2px solid orange";
  }

  // Current element
  child2.style.backgroundColor = "lightcoral";
  child2.style.border = "2px solid red";

  const info = document.getElementById("navigation-info");
  info.innerHTML = `
                <strong>Siblings Navigation:</strong><br>
                Previous sibling: ${
                  prevSibling ? prevSibling.textContent : "None"
                } (green)<br>
                Current element: ${child2.textContent} (red)<br>
                Next sibling: ${
                  nextSibling ? nextSibling.textContent : "None"
                } (yellow)
            `;
  info.style.display = "block";
}

function highlightChildren() {
  clearHighlights();
  const parent = document.querySelector(".parent");
  const children = parent.children;

  parent.style.backgroundColor = "lightgray";
  parent.style.border = "3px solid gray";

  Array.from(children).forEach((child, index) => {
    child.style.backgroundColor = `hsl(${index * 120}, 70%, 80%)`;
    child.style.border = "2px solid #333";
  });

  const info = document.getElementById("navigation-info");
  info.innerHTML = `
                <strong>Children Elements:</strong><br>
                Parent has ${children.length} children<br>
                First child: ${parent.firstElementChild.textContent}<br>
                Last child: ${parent.lastElementChild.textContent}
            `;
  info.style.display = "block";
}

function clearHighlights() {
  const allElements = document.querySelectorAll("#family-tree *");
  allElements.forEach((elem) => {
    elem.style.backgroundColor = "";
    elem.style.border = "";
  });

  document.getElementById("navigation-info").style.display = "none";
}

// Log ketika halaman dimuat
console.log("🚀 DOM Manipulation demo telah dimuat!");
console.log("Silakan coba berbagai demo yang tersedia.");
