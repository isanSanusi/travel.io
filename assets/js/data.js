// Get the modal
const modalUpdate = document.getElementById("myModalUpdate");
const modalAdd = document.getElementById("myModalAdd");
const modalDelete = document.getElementById("myModalDelete");

// Get the <span> element that closes the modal
const span = document.getElementsByClassName("close");

// Function to open the modal and populate the form
function openModalUpdate(
  id,
  busCompany,
  departureCity,
  destinationCity,
  travelDate,
  departureTime,
  arrivalTime,
  price,
  seatsAvailable
) {
  document.getElementById("busId").value = id;
  document.getElementById("busCompany").value = busCompany;
  document.getElementById("departureCity").value = departureCity;
  document.getElementById("destinationCity").value = destinationCity;
  document.getElementById("travelDate").value = travelDate;
  document.getElementById("departureTime").value = departureTime;
  document.getElementById("arrivalTime").value = arrivalTime;
  document.getElementById("price").value = price;
  document.getElementById("seatsAvailable").value = seatsAvailable;

  modalUpdate.style.display = "block";
}

const openModalAdd = () => {
  modalAdd.style.display = "block";
};

const openModalDelete = (id) => {
  document.getElementById("deleteButton").dataset.id = id;
  modalDelete.style.display = "block";
};

document.getElementById("deleteButton").onclick = function () {
  const id = this.dataset.id;
  window.location.href = "action_delete.php?id=" + id;
};

// Function to close the modal
const closeModal = (modalId) => {
  document.getElementById(modalId).style.display = "none";
};

// When the user clicks on <span> (x), close the modal
for (var i = 0; i < span.length; i++) {
  span[i].onclick = function () {
    closeModal(this.parentElement.parentElement.id);
  };
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = (event) => {
  if (event.target == modalUpdate) {
    modalUpdate.style.display = "none";
  } else if (event.target == modalAdd) {
    modalAdd.style.display = "none";
  } else if (event.target == modalDelete) {
    modalDelete.style.display = "none";
  }
};

// Dropdown action
function showDropdown(dropdownId) {
  document.getElementById(dropdownId).style.display = "block";
}

function hideDropdown(dropdownId) {
  setTimeout(() => {
    document.getElementById(dropdownId).style.display = "none";
  }, 200);
}

function selectOption(inputId, element) {
  document.getElementById(inputId).value = element.textContent;
  document.getElementById(element.parentNode.id).style.display = "none";
}


// slider function
let currentSlide = 0;

function moveSlide(direction) {
    const sliderWrapper = document.querySelector('.slider-wrapper');
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    currentSlide += direction;

    if (currentSlide >= totalSlides) {
        currentSlide = 0;
    } else if (currentSlide < 0) {
        currentSlide = totalSlides - 1;
    }

    sliderWrapper.style.transform = `translateX(-${currentSlide * 100}%)`;
}
