function Button({children, className = "", type = "button", onCLick = null}) {
    return <button type={type} className={(className+" btn w-full bg-accent")} onClick={onCLick}>
        {children}
    </button>
    
}

export default Button;