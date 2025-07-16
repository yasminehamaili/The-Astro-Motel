const prices = {
    rooms: {
        1: 3500,
        2: 5000,
        3: 6500,
        4: 8000,
    },
    views: {
        Sea: 500,
        Montagne: 500,
        Both: 800,
    }
};

function calculatePrice() {
    let roomPrice = 0;
    let viewPrice = 0;

    const selectedRoom = document.querySelector('input[name="room"]:checked');
    if (selectedRoom) {
        roomPrice = prices.rooms[selectedRoom.value];
    }

    const selectedView = document.querySelector('input[name="view"]:checked');
    if (selectedView) {
        viewPrice = prices.views[selectedView.value];
    }

    const totalPrice = roomPrice + viewPrice;

    document.getElementById("total-price").textContent = totalPrice;
}
