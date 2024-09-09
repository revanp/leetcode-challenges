use std::collections::HashMap;

impl Solution {
    pub fn two_sum(nums: Vec<i32>, target: i32) -> Vec<i32> {
        let mut map: HashMap<i32, i32> = HashMap::new();

        for (i, &val) in nums.iter().enumerate() {
            let i = i as i32;  // Convert usize to i32
            let diff = target - val;

            if let Some(&index) = map.get(&diff) {
                return vec![index, i];
            }

            map.insert(val, i);
        }

        vec![]
    }
}