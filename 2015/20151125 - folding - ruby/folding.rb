def fold_test(tape_in, tape_out)
  
  return true if tape_in.reverse == tape_out
  return false if tape_out.size > tape_in.size 
  return false if tape_out[0] != tape_in[0] 
  
  true
end