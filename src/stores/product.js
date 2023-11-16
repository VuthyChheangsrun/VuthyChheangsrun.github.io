import { defineStore } from "pinia";

export const useProductStore = defineStore('product', {
    state: () => ({
        groups: ["Milks & Diaries", "Coffees & Teas", "Pet Foods", "Meats", "Vegetables", "Fruits"],
        promotions: [
        {
            id: 1,
            title: "Everyday Fresh & Clean with Our Products",
            color: "#F0E8D5",
            image: "/onion.png",
            buColor: "green"
        },
        {
            id: 2,
            title: "Make your Breakfast Healthy and Easy",
            color: "#F3E8E8",
            image: "/milk.png",
            buColor: "green"
        },
        {
            id: 3,
            title: "The best Organic Products Online",
            color: "#E7EAF3",
            image: "/vegetable.png",
            buColor: "#FDC040"
        },
        ],
        categories: [
        {
            id: 1,
            group: "Milks & Diaries",
            name: "Cake & Milk",
            color: "#F2FCE4",
            image: "/burger.png"
        },
        {
            id: 2,
            group: "Fruits",
            name: "Peach",
            color: "#FFFCEB",
            image: "/peach.png"
        },
        {
            id: 3,
            group: "Fruits",
            name: "Organic Kiwi",
            color: "#ECFFEC",
            image: "/kiwi.png"
        },
        {
            id: 4,
            group: "Fruits",
            name: "Red Apple",
            color: "#FEEFEA",
            image: "/apple.png"
        },
        {
            id: 5,
            group: "Coffees & Teas",
            name: "Snack",
            color: "#FFF3EB",
            image: "/snack.png"
        },
        {
            id: 6,
            group: "Fruits",
            name: "Black Plums",
            color: "#FFF3FF",
            image: "/black.png"
        },
        {
            id: 7,
            group: "Vegetables",
            name: "Vegetables",
            color: "#F2FCE4",
            image: "/cabbage.png"
        },
        {
            id: 8,
            group: "Coffees & Teas",
            name: "Headphone",
            color: "#FFFCEB",
            image: "/headset.png"
        },
        {
            id: 9,
            group: "Milks & Diaries",
            name: "Cake & Milk",
            color: "#F2FCE4",
            image: "/cakemilk.png"
        },
        {
            id: 10,
            group: "Fruits",
            name: "Orange",
            color: "#FFF3FF",
            image: "/orange.png"
        },
        ],
        products: [
        {
            id: 1,
            tag: "-17%",
            tagcol: "green",
            image: "/mango.png",
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
            image: "/corn.png",
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
            image: "/orange2.png",
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
            image: "/chili.png",
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
            image: "/lemon.png",
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
            image: "/fist.png",
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
            image: "/fistLemon.png",
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
            image: "/steak.png",
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
            image: "/thinmeat.png",
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
            image: "/red-onion.png",
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