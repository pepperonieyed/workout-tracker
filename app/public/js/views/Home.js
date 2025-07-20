import AbstractView from "./AbstractView.js";

export default class extends AbstractView {
    constructor() {
        super();
        this.setTitle("Workout Tracker - Home");
    }

    async getHTML() {
        return `
            <h1>Welcome back</h1>
            <p>blah blah blah</p>
        `;
    }
}
