# Ruangku (2019)

**Ruangku** is a prototype front-end login page for a room reservation application.  
It allows users to log in to their personal dashboard where they can book and manage available rooms.



---

## 🧩 Technology & Approach

- **HTML5** for semantic markup (`<form>`, `<label>`, `<input>`, `<button>`)
- **CSS3**:
  - **Flexbox** for centering and horizontal/vertical alignment
  - **Responsive media queries**
  - Custom styling for inputs, buttons, links, etc.
- **JavaScript** to handle the password visibility toggle
- **Google Fonts** (Lato) for typography
- An `assets/` directory containing background and logo images

---

## ⚙️ How to Run 🔽

1. Clone or download this repo.
2. Open it in **VS Code** (or your code editor).
3. Open `index.html` with **Live Server** or in your browser.
4. Interact with the login form, toggle password visibility, and test responsiveness.

---

## 🖌️ Key Patterns & Concepts

- **Single `style.css`** used across additional pages — easy to maintain
- **Responsive design** via `@media (max-width: 480px)`
- **Flexbox** for layout:
  - `.container { display: flex; justify-content: center; align-items: center; }`
  - `.link-row { display: flex; justify-content: space-between; }`
- **Reusability of styles**: classes like `.google-login`, `.link-row`, and `.password-wrapper` can be used on other pages

---

## ✅ Possible Next Steps

- Add **additional pages** (e.g. `register.html`, `forgot-password.html`) reusing the same CSS
- Add **form validation** with error states (e.g. red borders/text)
- Enhance **accessibility** with proper `for`/`id`, `aria-label`, etc.
- Include **animations** like fade-in card effects or button hover transitions
- Localize text (Bahasa/English toggle, RTL support)

---

## 📬 Contributions Welcome!

Feel free to:
- Suggest improvements 🛠️
- Report issues 🐞
- Propose new features (like multi-page support or validation)

Just open an issue or submit a pull request — happy to collaborate! 😄

---

## 📝 License

This project is open-source and free to use or modify under the [MIT License](LICENSE) (if you'd like to add it).

---

**Ruangku** is a clean and responsive starting point for building more complex front-end pages around login and user authentication. If you have questions or want to expand it, I’m here to help!
