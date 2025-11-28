const inputBox = document.getElementById("input-box");

const inputBox1 = document.getElementById("input-box1");

const listContainer = document.getElementById("list-container");

function addTask(){
    if(inputBox.value === '' || inputBox1.value === ''){
        alert("You must write something!");
    }

    else{
        let li = document.createElement("li");
        li.innerHTML = inputBox.value;
        listContainer.appendChild(li);
        let span = document.createElement("span");
        span.innerHTML = "\u00d7";
        li.appendChild(span); 

        let li1 = document.createElement("li");
        li1.innerHTML = inputBox1.value;
        listContainer.appendChild(li1);
        let span1 = document.createElement("span");
        span1.innerHTML = "\u00d7";
        li1.appendChild(span1); 


    }
    inputBox.value = "";
    inputBox1.value = "";
    saveData();
}

listContainer.addEventListener("click", function(e){
    if(e.target.tagName === "LI"){
        e.target.classList.toggle("checked");
        saveData();
    }
    else if(e.target.tagName === "SPAN"){
        e.target.parentElement.remove();
        saveData();
    }
}, false);

function saveData(){
    locolStorage.setItem("data", listContainer.innerHTML);
}

function showTask(){
    listContainer.innerHTML = localStorage.getItem("data");
}
showTask();

