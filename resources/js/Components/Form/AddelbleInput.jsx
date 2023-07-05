import React, { useState } from "react";
import TextInput from "./TextInput";

const AddebleInput = ({ type = 'text',label="", className = '', isFocused = false,name="", ...props }) => {
    const [inputs, setInputs] = useState([""]);

    const handleInputChange = (index, value) => {
        const updatedInputs = [...inputs];
        updatedInputs[index] = value;
        setInputs(updatedInputs);
    };

    const handleAddInput = () => {
        const updatedInputs = [...inputs,""];
        setInputs(updatedInputs);
    };

    return (
        <div>
            {inputs.map((input, index) => (
                <div className="mt-2 d-flex flex-col" key={index}>
                    <TextInput
                    type = {type}
                    className = {className}
                    name = {name+"["+index+"]"}
                    {...props}
                    ></TextInput>
                </div>
            ))}
            <button type="button" onClick={handleAddInput}>+ Item {label}</button>
        </div>
    );
};

export default AddebleInput;
