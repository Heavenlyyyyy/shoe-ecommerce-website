var li_items = document.querySelectorAll(".sidebar ul li");
var bar = document.querySelector(".bar");
var wrapper = document.querySelector(".wrapper");

li_items.forEach((li_item) => {
    li_item.addEventListener("mouseenter", () => {
        if (wrapper.classList.contains("clickcollapse")) {
            return;
        }
        else {
            li_item.closest(".wrapper").classList.remove("hovercollapse");
        }
    })
})

li_items.forEach((li_item) => {
    li_item.addEventListener("mouseleave", () => {
        if (wrapper.classList.contains("clickcollapse")) {
            return;
        }
        else {
            li_item.closest(".wrapper").classList.add("hovercollapse");
        }
    })
})

bar.addEventListener("click", () => {
    bar.closest(".wrapper").classList.toggle("clickcollapse");
    bar.closest(".wrapper").classList.toggle("hovercollapse");
})