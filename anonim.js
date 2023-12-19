function addComment() {
    var commentText = document.getElementById("comment-text").value;

    if (commentText.trim() === "") {
      alert("Silakan isi komentar Anda.");
      return;
    }

    var commentContainer = document.getElementById("comment-container");

    // Buat elemen komentar baru
    var commentElement = document.createElement("div");
    commentElement.className = "comment";
    commentElement.textContent = commentText;

    // Gaya khusus untuk komentar yang ditambahkan melalui JavaScript
    commentElement.style.backgroundColor = "#e1f5fe"; // Warna latar belakang biru muda
    commentElement.style.color = "#007bb5"; // Warna teks biru tua

    // Tambahkan tombol hapus komentar
    var deleteButton = document.createElement("button");
    deleteButton.className = "delete-button";
    deleteButton.textContent = "Hapus";
    deleteButton.onclick = function() {
      deleteComment(commentElement);
    };
    commentElement.appendChild(deleteButton);

    // Tambahkan elemen komentar ke kontainer
    commentContainer.appendChild(commentElement);

    // Simpan komentar ke penyimpanan lokal
    saveComment(commentText);

    // Reset formulir komentar
    document.getElementById("comment-text").value = "";
  }

  // Fungsi untuk menyimpan komentar ke penyimpanan lokal
  function saveComment(comment) {
    var comments = localStorage.getItem("comments") || "[]";
    comments = JSON.parse(comments);
    comments.push(comment);
    localStorage.setItem("comments", JSON.stringify(comments));
  }

  // Fungsi untuk memuat komentar dari penyimpanan lokal saat halaman dimuat
  function loadComments() {
    var commentContainer = document.getElementById("comment-container");
    var comments = localStorage.getItem("comments") || "[]";
    comments = JSON.parse(comments);

    comments.forEach(function(commentText) {
      var commentElement = document.createElement("div");
      commentElement.className = "comment";
      commentElement.textContent = commentText;

      // Tambahkan tombol hapus komentar
      var deleteButton = document.createElement("button");
      deleteButton.className = "delete-button";
      deleteButton.textContent = "Hapus";
      deleteButton.onclick = function() {
        deleteComment(commentElement);
      };
      commentElement.appendChild(deleteButton);

      commentElement.style.backgroundColor = "#e1f5fe";
      commentElement.style.color = "#007bb5";
      commentContainer.appendChild(commentElement);
    });
  }

  // Fungsi untuk menghapus komentar
  function deleteComment(commentElement) {
    var commentContainer = document.getElementById("comment-container");
    commentContainer.removeChild(commentElement);

    // Perbarui penyimpanan lokal setelah komentar dihapus
    updateLocalStorage();
  }

  // Fungsi untuk memperbarui penyimpanan lokal setelah komentar dihapus
  function updateLocalStorage() {
    var comments = [];
    var commentElements = document.getElementsByClassName("comment");
    
    for (var i = 0; i < commentElements.length; i++) {
      comments.push(commentElements[i].textContent);
    }

    localStorage.setItem("comments", JSON.stringify(comments));
  }

  // Memuat komentar dari penyimpanan lokal saat halaman dimuat
  window.onload = loadComments;