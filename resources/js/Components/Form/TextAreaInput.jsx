function TextAreaInput({
    className = "",
    isFocused = false,
    rows = 3,
    ...props
}) {
    return (
        <div class="mb-3">
            <textarea
                {...props}
                class={"form-control " + className}
                rows={rows}
            ></textarea>
        </div>
    );
}

export default TextAreaInput;
