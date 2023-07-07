import { useState } from "react";
import Card from "./Card";
import { Inertia } from "@inertiajs/inertia";
import { Link, router } from "@inertiajs/react";

function RecipeCard({
    id,
    img,
    title,
    description,
    like,
    isLiked,
    slug,
    userId,
}) {
    
    const [likeCount, setLikeCount] = useState(like);
    const [hasLiked, setHasLiked] = useState(isLiked);
    const [buttonText, setButtonText] = useState(hasLiked ? "Disukai" : "Suka");

    const cardClickHandler = (slug) => {
        Inertia.visit("/recipe/" + slug);
    };

    const postLike = (data) => {
        setButtonText("...");
        fetch("api/like", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(data),
        })
            .then((response) => response.json())
            .then((data) => {
                // Handle the response data as needed
                console.log(data);
                setLikeCount(likeCount + 1);
                setHasLiked(true);
                setButtonText("Disukai");
            })
            .catch((error) => {
                // Handle any errors that occurred during the request
                console.error("Error:", error);
                setButtonText("Sukai");
            });
    };

    const postDislike = (data) => {
        setButtonText("...");
        fetch("api/dislike", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(data),
        })
            .then((response) => response.json())
            .then((data) => {
                // Handle the response data as needed
                console.log(data);
                setLikeCount(likeCount - 1);
                setHasLiked(false);
                setButtonText("Sukai");
            })
            .catch((error) => {
                // Handle any errors that occurred during the request
                console.error("Error:", error);
                setButtonText("Disukai");
            });
    };

    return (
        <Card
            img={img}
            cardClickHandler={() => {
                cardClickHandler(slug);
            }}
            buttonClickHandle={() => {
                if (hasLiked) {
                    postDislike({
                        recipeId: id,
                        userId: userId,
                    });
                } else {
                    postLike({
                        recipeId: id,
                        userId: userId,
                    });
                }
            }}
            btnText={buttonText}
            title={title}
            description={description}
            like={likeCount}
        />
    );
}

export default RecipeCard;
