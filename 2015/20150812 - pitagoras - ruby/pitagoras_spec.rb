require './pitagoras'

describe "Pitagoras" do
  it "tripla 1 2 3" do
    expect(pitagoras(1,2,3)).to eq('tripla')
  end

  it "tripla 3 4 5" do
    expect(pitagoras(3,4,5)).to eq('tripla pitagorica primitiva')
  end

  it "tripla 3 1 2" do
    expect(pitagoras(3,1,2)).to eq('tripla')
  end

  it "tripla 3 5 2" do
    expect(pitagoras(3,5,2)).to eq('tripla')
  end

  it "tripla 5 4 3" do
    expect(pitagoras(5,4,3)).to eq('tripla pitagorica primitiva')
  end 
  
  it "tripla 5 12 13" do
    expect(pitagoras(5,12,13)).to eq('tripla pitagorica primitiva')
  end


end