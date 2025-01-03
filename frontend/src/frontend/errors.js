export function generateErrorMessage(errorResponse) {
    const errorsForm = errorResponse.data;
    let errors = [];
    for (const error in errorsForm) {
        errors.push(`${error} : ${errorsForm[error]}`)                        
    }
    
    return errors;
}