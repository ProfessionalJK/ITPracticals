import java.util.*;
public class EightPuzzle {  
    static final byte [] goalTiles = { 1, 2, 3, 4, 5, 6, 7, 8, 0 };//Tiles for completed puzzle
    final PriorityQueue<State> queue = new PriorityQueue<State>(100, new Comparator<State>() {
        @Override
        public int compare(State a, State b) { 
            return a.priority() - b.priority();
        }
    });
    //The closed state set.
    final HashSet <State> closed = new HashSet <State>();
    class State 
{
        final byte [] tiles;    //Tiles left to right,top to bottom
        final int spaceIndex;   //Index of spaces zero(blank slide)   
        final int g;            //No of moves from start
        final int h;            //Heuristic value i.e.differencefrom goal state
        final State prev;       //previous state     
        int priority() 
	{
            return g + h;
        } 
        State(byte [] initial)    //Build starting state
	{          
            tiles = initial;
            spaceIndex = index(tiles, 0);
            g = 0;
            h = heuristic(tiles);
            prev = null;
        }        
        State(State prev, int slideFromIndex)   //Build successor to previous by sliding from current state
	 {
            tiles = Arrays.copyOf(prev.tiles, prev.tiles.length);
            tiles[prev.spaceIndex] = tiles[slideFromIndex];
            tiles[slideFromIndex] = 0;
            spaceIndex = slideFromIndex;
            g = prev.g + 1;
            h = heuristic(tiles);
            this.prev = prev;
        }
        boolean isGoal()    //Will return true value if goal test succeed
	 {
            return Arrays.equals(tiles, goalTiles);
        }
        //Successor moves to south,north,east aand west sides.	
        State moveS() { return spaceIndex > 2 ? new State(this, spaceIndex - 3) : null; }       
        State moveN() { return spaceIndex < 6 ? new State(this, spaceIndex + 3) : null; }       
        State moveE() { return spaceIndex % 3 > 0 ? new State(this, spaceIndex - 1) : null; }       
        State moveW() { return spaceIndex % 3 < 2 ? new State(this, spaceIndex + 1) : null; }  
        void print()   //Printing the current state 
	{
            System.out.println("  p = " + priority() + " = h = " + h);
            for (int i = 0; i < 9; i += 3)
                System.out.println("  " + tiles[i] + " " + tiles[i+1] + " " + tiles[i+2]);
        }        
        void printAll()  //Print the solution chain fromstart state
	 {
            if (prev != null) prev.printAll();
            System.out.println();
            print();
        }
        @Override
        public boolean equals(Object obj) 
	{
            if (obj instanceof State) 
	    {
                State other = (State)obj;
                return Arrays.equals(tiles, other.tiles);
            }
            return false;
        }
        @Override
        public int hashCode() 
	{
            return Arrays.hashCode(tiles);
        }
    }   
    void addSuccessor(State successor) //adds the valid successor i.e.non null and not closed 
	{
        if (successor != null && !closed.contains(successor)) 
            queue.add(successor);
   	 }
    void solve(byte [] initial) //Running  the solver
	{
        queue.clear();
        closed.clear();
        long start = System.currentTimeMillis();   //capturing the systems time elapsed to solve
        queue.add(new State(initial));
        while (!queue.isEmpty()) {          
            State state = queue.poll();

            
            if (state.isGoal())
	    {
                long elapsed = System.currentTimeMillis() - start;
                state.printAll();
                System.out.println("  Elapsed (ms) = " + elapsed);
                return;
            }

            
            closed.add(state);  //To make sure that we are not evisiting states

            
            addSuccessor(state.moveS());
            addSuccessor(state.moveN());
            addSuccessor(state.moveW());
            addSuccessor(state.moveE());
        }
    }

    
    static int index(byte [] a, int val)  //Returns the index of value in given byte of array
    {
        for (int i = 0; i < a.length; i++)
            if (a[i] == val) return i;
        return -1;
    }

    
    static int manhattanDistance(int a, int b) //Returns manhatan distance between tiles with  indices a and b
    {
        return Math.abs(a / 3 - b / 3) + Math.abs(a % 3 - b % 3);
    }

        static int heuristic(byte [] tiles) 
    {
        int h = 0;
        for (int i = 0; i < tiles.length; i++)
            if (tiles[i] != 0)
                h = Math.max(h, manhattanDistance(i, tiles[i]));
        return h;
    }
    public static void main(String[] args) {

        
        byte [] initial = { 7, 2, 3, 5, 8, 0, 1, 6, 4 };//Initial state is provided to system

        
        //byte [] initial = { 1, 4, 2, 3, 0, 5, 6, 7, 8 };

        new EightPuzzle().solve(initial);
    }
}
