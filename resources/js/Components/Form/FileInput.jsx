function FileInput({ className = "", ...props }) {
    const handleFileChange = (e) => {
        setSelectedFile(e.target.files[0]);
    };

    return (
        <input
            {...props}
            className={"form-control " + className}
            type="file"
            onChange={handleFileChange}
        ></input>
    );
}

export default FileInput;
