import { read } from "@popperjs/core";
/**
 * Check if the uploaded file is from given type
@param {File} file File object  
@param {string} type  Desired file type
**/
export const validateFile = async function (file, type) {
    return file.type === type
}

/**
 * Returns a base64 string from given file type
@param {File} file File object  
**/
export const fileToBase64 = async function (file) {
    const arrayBuffer = await readFileInput(file);  
    return arrayBufferToBase64(arrayBuffer);
}


/**
 * Returns a FileBufferArray
@param {File} file File object  
**/
async function readFileInput(file) {
    return await file.arrayBuffer()
}

/**
 * 
@param {ArrayBuffer} arrayBuffer Array buffer from a given file   
**/
async function arrayBufferToBase64(arrayBuffer) {
    let binary = '';
    const bytes = new Uint8Array(arrayBuffer);
    let len = bytes.byteLength;

    for (let i = 0; i < len; i++){
        binary += String.fromCharCode(bytes[i]);
    }

    return window.btoa(binary);
}