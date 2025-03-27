"use strict";

const summaries = document.querySelectorAll("details");
const canvas = document.querySelector("#center");

function ExpandUponHover(item, mode)
{
    if (mode)
    {
        item.setAttribute("open", "");
    }
    else if (!mode)
    {
        item.removeAttribute("open");
    }
}

function GetElementType(classes)
{
    CreateElement("p");
}

function CreateElement(type)
{
    let content = prompt("input?");

    let newElement = `<${type}>${content}</${type}>`;

    canvas.innerHTML += newElement;
}

for (let element of summaries)
{
    element.addEventListener("mouseover", function(){ExpandUponHover(element, true)})
    element.addEventListener("mouseout", function(){ExpandUponHover(element, false)})
}

for (let button of document.querySelectorAll(".addelement"))
{
    button.addEventListener("click", function(){GetElementType(button.innerHTML)});
}