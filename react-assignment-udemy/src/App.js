import Expenses from "./components/Expenses";

function App() {
  const expense = [
    { title: "New TV", amount: 799.99, date: new Date(2020, 8, 13) },
    { title: "Toilet Paper", amount: 94.12, date: new Date(2020, 8, 18) },
    { title: "Car Insurance", amount: 294.67, date: new Date(2021, 2, 27) },
    { title: "New Desk(Wooden)", amount: 450, date: new Date(2021, 6, 11) },
  ];

  return (
    <div>
      <h2>Let's Get started!</h2>
      <Expenses items={expense} />
    </div>
  );
}

export default App;
