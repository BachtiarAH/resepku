
function Button({ children, className = "", type = "button", onCLick = null }) {
    return (
        <div>
            <button
                type={type}
                className={className + " btn w-full bg-accent"}
                onClick={onCLick}
            >
                {children}
            </button>
        </div>
    );
}

export default Button;
