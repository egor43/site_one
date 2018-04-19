$(document).ready(function()
{
    alert("Page loaded!")
});

$("#title_1").click(function()
{
    $("h1").css("color", function(index, old_value)
    {
        if(old_value == "rgb(0, 0, 0)")
        {
            return "rgb(0, 0, 255)";
        }
        else
        {
            return "rgb(0, 0, 0)";
        }
    });
});