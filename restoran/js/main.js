window.onload = function() {
    let lists = document.querySelectorAll("div.list");
    if (lists) {
        lists.forEach(list => {
            let button = list.querySelector("button");
            button.addEventListener("click", function() {
                let blocks = list.querySelectorAll("li");
                switch(button.value) {
                    case "1":
                        blocks.forEach(block => {
                            if(block.offsetHeight == 0) {
                                block.classList.add("visible");
                            }
                        });
                        button.value = 0;
                        button.innerText = button.dataset.hide;
                        break;
                    case "0":
                        blocks.forEach(block => {
                            block.classList.remove("visible");
                        });
                        button.value = 1;
                        button.innerText = button.dataset.show;
                        break;
                }
                
            });
        });
    }
}