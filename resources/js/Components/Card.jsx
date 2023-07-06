import React from "react";
import Button from "./Button";

function Card({
    img = "https://picsum.photos/300/200",
    cardClickHandler = null,
    buttonClickHandle = null,
    isStopPropagation = true,
    btnText = "button",
    title = "judul resep",
    description = "Some quick example text to build on the card title and make up the bulk of the card's content.",
    like = 0,
    liked = false
}) {
    return (
        <div
            onClick={cardClickHandler}
            className={"card "+liked&&"hover:cursor-pointer"}
            style={{ width: "18rem" }}
        >
            <img src={img} className="card-img-top" alt="..." />
            <div className="card-body">
                <p className="text-secondary">
                    <small>{like==null?0:like} orang menyukai</small>
                </p>
                <h5 className="card-title h5 text-default">{title}</h5>
                <p className="card-text">{description}</p>
                <Button
                    onCLick={(e) => {
                        isStopPropagation&&e.stopPropagation();
                        buttonClickHandle()
                    }}
                    className="bg-accent"
                >
                    {btnText}
                </Button>
            </div>
        </div>
    );
}

export default Card;
