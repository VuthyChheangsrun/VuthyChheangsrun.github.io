import { defineStore } from "pinia";

export const useProductStore = defineStore('product', {
    state: () => ({
        groups: ["Milks & Diaries", "Coffees & Teas", "Pet Foods", "Meats", "Vegetables", "Fruits"],
        promotions: [
        {
            id: 1,
            title: "Everyday Fresh & Clean with Our Products",
            color: "#F0E8D5",
            image: "src/assets/onion.png",
            buColor: "green"
        },
        {
            id: 2,
            title: "Make your Breakfast Healthy and Easy",
            color: "#F3E8E8",
            image: "src/assets/milk.png",
            buColor: "green"
        },
        {
            id: 3,
            title: "The best Organic Products Online",
            color: "#E7EAF3",
            image: "src/assets/vegetable.png",
            buColor: "#FDC040"
        },
        ],
        categories: [
        {
            id: 1,
            group: "Milks & Diaries",
            name: "Cake & Milk",
            color: "#F2FCE4",
            image: "src/assets/burger.png"
        },
        {
            id: 2,
            group: "Fruits",
            name: "Peach",
            color: "#FFFCEB",
            image: "src/assets/peach.png"
        },
        {
            id: 3,
            group: "Fruits",
            name: "Organic Kiwi",
            color: "#ECFFEC",
            image: "src/assets/kiwi.png"
        },
        {
            id: 4,
            group: "Fruits",
            name: "Red Apple",
            color: "#FEEFEA",
            image: "src/assets/apple.png"
        },
        {
            id: 5,
            group: "Coffees & Teas",
            name: "Snack",
            color: "#FFF3EB",
            image: "src/assets/snack.png"
        },
        {
            id: 6,
            group: "Fruits",
            name: "Black Plums",
            color: "#FFF3FF",
            image: "src/assets/black.png"
        },
        {
            id: 7,
            group: "Vegetables",
            name: "Vegetables",
            color: "#F2FCE4",
            image: "src/assets/cabbage.png"
        },
        {
            id: 8,
            group: "Coffees & Teas",
            name: "Headphone",
            color: "#FFFCEB",
            image: "src/assets/headset.png"
        },
        {
            id: 9,
            group: "Milks & Diaries",
            name: "Cake & Milk",
            color: "#F2FCE4",
            image: "src/assets/cakemilk.png"
        },
        {
            id: 10,
            group: "Fruits",
            name: "Orange",
            color: "#FFF3FF",
            image: "src/assets/orange.png"
        },
        ],
        products: [
        {
            id: 1,
            tag: "-17%",
            tagcol: "green",
            image: "src/assets/mango.png",
            category: 3,
            name: "Seeds of Change Organic Quinoa, Brown, & Red Rice",
            rate: "4.0",
            description: "500 gram",
            sellPrice: "3.0",
            discountPercentage: 17,
            discountPrice: 2.51
        },
        {
            id: 2,
            tag: "Hot",
            tagcol: "red",
            image: "src/assets/corn.png",
            category: 3,
            name: "All natural Italian-Style Chicken Meatballs",
            rate: "4.0",
            description: "500 gram",
            sellPrice: "3.0",
            discountPercentage: 17,
            discountPrice: 2.51
        },
        {
            id: 3,
            tag: "Sale",
            tagcol: "orange",
            image: "src/assets/orange2.png",
            category: 3,
            name: "Angie's Boomchickapop Sweet & Salty Kettle Corn",
            rate: "4.0",
            description: "500 gram",
            sellPrice: "3.0",
            discountPercentage: 17,
            discountPrice: 2.51
        },
        {
            id: 4,
            tag: "",
            tagcol: "",
            image: "src/assets/chili.png",
            category: 3,
            name: "Foster Farms Takeout Crispy Classic Buffalo Wings",
            rate: "4.0",
            description: "500 gram",
            sellPrice: "3.0",
            discountPercentage: 17,
            discountPrice: 2.51
        },
        {
            id: 5,
            tag: "",
            tagcol: "",
            image: "src/assets/lemon.png",
            category: 3,
            name: "Blue Diamonds Almonds Lightly Salted Vegetables",
            rate: "4.0",
            description: "500 gram",
            sellPrice: "3.0",
            discountPercentage: 17,
            discountPrice: 2.51
        },
        {
            id: 6,
            tag: "",
            tagcol: "",
            image: "src/assets/fist.png",
            category: 3,
            name: "Chobani Complete Vanilla Greek Yogurt",
            rate: "4.0",
            description: "500 gram",
            sellPrice: "3.0",
            discountPercentage: 17,
            discountPrice: 2.51
        },
        {
            id: 7,
            tag: "Sale",
            tagcol: "yellow",
            image: "src/assets/fistLemon.png",
            category: 3,
            name: "Canada Dry Ginger Ale - 2 L Bottle - 200ml - 400g",
            rate: "4.0",
            description: "500 gram",
            sellPrice: "3.0",
            discountPercentage: 17,
            discountPrice: 2.51
        },
        {
            id: 8,
            tag: "",
            tagcol: "",
            image: "src/assets/steak.png",
            category: 3,
            name: "Encore Seafoods Stuffed Alaskan Salmon",
            rate: "4.0",
            description: "500 gram",
            sellPrice: "3.0",
            discountPercentage: 17,
            discountPrice: 2.51
        },
        {
            id: 9,
            tag: "",
            tagcol: "",
            image: "src/assets/thinmeat.png",
            category: 3,
            name: "Gorton’s Beer Battered Fish Fillets with soft paper",
            rate: "4.0",
            description: "500 gram",
            sellPrice: "3.0",
            discountPercentage: 17,
            discountPrice: 2.51
        },
        {
            id: 10,
            tag: "Hot",
            tagcol: "red",
            image: "src/assets/red-onion.png",
            category: 3,
            name: "Haagen-Dazs Caramel Cone Ice Cream Ketchup",
            rate: "4.0",
            description: "500 gram",
            sellPrice: "3.0",
            discountPercentage: 17,
            discountPrice: 2.51
        },
        ],
    })
})