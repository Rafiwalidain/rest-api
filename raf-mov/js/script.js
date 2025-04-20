function searchMovie() {
  $.ajax({
    url: "https://www.omdbapi.com",
    type: "GET",
    dataType: "json",
    data: {
      apikey: "37ed49ff",
      s: $("#searchInput").val(),
    },
    success: function (result) {
      if (result.Response === "True") {
        $("#movieList").html("");
        let movies = result.Search;

        $.each(movies, function (i, data) {
          $("#movieList").append(
            `
                    <div class="col-md-4 mb-3">
                      <div class="card mb-3">
                        <img src="` +
              data.Poster +
              `" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">` +
              data.Title +
              `</h5>
                          <h6 class="card-subtitle mb-2 text-body-secondary">` +
              data.Year +
              `</h6>
                          <a href="#" class="card-link seeDetail" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="` +
              imdbID +
              `">See Detail</a>
                        </div>
                      </div>
                    </div>
                  `
          );
        });

        $("#searchInput").val("");
      } else {
        $("#movieList").html(
          `
                <div class="col">
                <h2 class='text-center'>` +
            result.Error +
            `</h2>
                </div>
                `
        );
      }
    },
  });
}

$("#searchBtn").on("click", function () {
  searchMovie();
});

$("#searchInput").on("keyup", function (e) {
  if (e.keyCode === 13) {
    searchMovie();
  }
});

$("#movieList").on("click", "seeDetail", function () {
  $.ajax({
    url: "https://www.omdbapi.com",
    type: "GET",
    dataType: "json",
    data: {
      apikey: "37ed49ff",
      i: $(this).data("id"),
    },
    success: function (movie) {
      if (movie.Response === "true") {
        $("#modal-body").html(
          `
            <div class="container-fluid">
            div class="row">
                <div class="col-md-4">
                    <img src="` +
            movie.Poster +
            `" class="img-fluid" alt="">
                </div>

                <div class="col-md-8">
                <ul class="list-group">
                    <li class="list-group-item"><h3>` +
            movie.Title +
            `</h3></li>
                    <li class="list-group-item">Released : ` +
            movie.Released +
            `</li>
                    <li class="list-group-item">Genre : ` +
            movie.Genre +
            `</li>
                    <li class="list-group-item">Dierctor : ` +
            movie.Director +
            `</li>
                    <li class="list-group-item">Actor : ` +
            movie.Actor +
            `</li>
                    </ul>
                </div>
                </div>
            </div>
            `
        );
      }
    },
  });
});
