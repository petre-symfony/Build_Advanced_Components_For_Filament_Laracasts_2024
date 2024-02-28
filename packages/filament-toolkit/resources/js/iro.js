import iro from '@jaames/iro'

export default function myComponent(message) {
  return {
    message: message,

    init(){
      console.log('You said', message)
    }
  }
}