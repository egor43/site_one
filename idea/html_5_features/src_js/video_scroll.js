var video = ["resources/video_1.mp4", "resources/video_2.mp4", "resources/video_3.mp4"];

var left_arrow = document.getElementById("left_arrow");
var right_arrow = document.getElementById("right_arrow");
 
left_arrow.addEventListener("click", prew);
right_arrow.addEventListener("click", next);

function next()
{
    var current_video = document.getElementById("video_player_src");
    var current_src = current_video.getAttribute("src");
    for (let index = 0; index < video.length; index++)
    {
        const element = video[index];
        if (element === current_src)
        {
            var next_index = index + 1;
            if (next_index >= video.length)
            {
                next_index = 0;
            }
            current_video.setAttribute("src", video[next_index]);
        }
    }
    var video_div = document.getElementById('video_div');
    video_div.innerHTML = video_div.innerHTML;

}

function prew()
{
    var current_video = document.getElementById("video_player_src");
    var current_src = current_video.getAttribute("src");
    for (let index = 0; index < video.length; index++)
    {
        const element = video[index];
        if (element === current_src)
        {
            var next_index = index - 1;
            if (next_index < 0)
            {
                next_index = video.length - 1;
            }
            current_video.setAttribute("src", video[next_index]);
        }
    }
    var video_div = document.getElementById('video_div');
    video_div.innerHTML = video_div.innerHTML;
}

